<?php

namespace App\Http\Controllers;

use App\Models\SteamAccount;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use SteamSdk\OpenId\SteamOpenId;

class SteamAuthController extends Controller
{
    /** Редирект на Steam OpenID (живой флоу входа). */
    public function redirect(SteamOpenId $openId): RedirectResponse
    {
        return redirect()->away($openId->url(route('steam.callback'), url('/')));
    }

    /** Callback: валидируем у Steam, логиним/создаём пользователя. */
    public function callback(Request $request, SteamOpenId $openId): RedirectResponse
    {
        $steamId64 = $openId->validate($request->query());

        if ($steamId64 === null) {
            return redirect('/')->with('error', 'Steam-вход не подтверждён (отменён или нет аккаунта)');
        }

        $account = SteamAccount::query()->firstWhere('steam_id64', $steamId64);

        if ($account !== null) {
            $user = $account->user;

            if ($user === null) {
                return redirect('/')->with('error', 'Steam-аккаунт не привязан к пользователю');
            }

            auth()->login($user);

            return redirect('/')->with('ok', 'Вошли как '.$user->name);
        }

        // Новый пользователь по SteamID (в проде — после проверки профиля).
        $user = User::query()->create([
            'slug' => 'steam-'.$steamId64,
            'name' => 'Steam '.substr($steamId64, -6),
        ]);

        SteamAccount::query()->create([
            'user_id' => $user->id,
            'steam_id64' => $steamId64,
        ]);

        auth()->login($user);

        return redirect('/')->with('ok', 'Создан пользователь по SteamID '.$steamId64);
    }

    /** Демо-вход без Steam (кнопки seller/buyer). */
    public function demo(Request $request): RedirectResponse
    {
        $validated = $request->validate(['slug' => 'required|string|exists:users,slug']);
        $user = User::query()->where('slug', $validated['slug'])->firstOrFail();

        auth()->login($user);

        return redirect('/');
    }

    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
