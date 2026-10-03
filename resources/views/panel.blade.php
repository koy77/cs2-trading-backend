<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CS2 Trading — демо-панель</title>
    <style>
        :root {
            --bg: #0e1116; --panel: #161b23; --panel2: #1c2230; --border: #2a3140;
            --text: #e6e9ef; --muted: #8b94a7; --accent: #4f8cff; --ok: #37c26b; --warn: #e8b13f; --err: #e05c5c;
        }
        * { box-sizing: border-box; }
        body { margin: 0; background: var(--bg); color: var(--text); font: 13px/1.45 ui-monospace, "JetBrains Mono", Menlo, Consolas, monospace; }
        a { color: var(--accent); }
        header { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; padding: 12px 16px; border-bottom: 1px solid var(--border); position: sticky; top: 0; background: var(--bg); z-index: 5; }
        header h1 { font-size: 15px; margin: 0 10px 0 0; }
        .chips { display: flex; flex-wrap: wrap; gap: 6px; }
        .chip { padding: 2px 8px; border: 1px solid var(--border); border-radius: 10px; color: var(--muted); font-size: 11px; }
        .chip.ok { color: var(--ok); border-color: var(--ok); }
        .chip.err { color: var(--err); border-color: var(--err); }
        .spacer { flex: 1; }
        main { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; padding: 12px 16px 40px; max-width: 1500px; }
        section { background: var(--panel); border: 1px solid var(--border); border-radius: 8px; padding: 10px 12px; min-width: 0; }
        section.wide { grid-column: 1 / -1; }
        section h2 { font-size: 12px; text-transform: uppercase; letter-spacing: .08em; color: var(--muted); margin: 0 0 8px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap; }
        button { background: var(--panel2); color: var(--text); border: 1px solid var(--border); border-radius: 6px; padding: 4px 10px; font: inherit; font-size: 12px; cursor: pointer; }
        button:hover { border-color: var(--accent); }
        button.primary { background: #24406e; border-color: var(--accent); }
        button.warn { border-color: var(--warn); color: var(--warn); }
        button.danger { border-color: var(--err); color: var(--err); }
        button.small { padding: 1px 7px; font-size: 11px; }
        button:disabled { opacity: .45; cursor: wait; }
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { text-align: left; padding: 3px 6px; border-bottom: 1px solid var(--border); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 340px; }
        th { color: var(--muted); font-weight: normal; font-size: 11px; }
        .row { display: flex; gap: 6px; flex-wrap: wrap; align-items: center; }
        .muted { color: var(--muted); }
        .ok { color: var(--ok); }
        .err { color: var(--err); }
        .warn { color: var(--warn); }
        .pill { display: inline-block; padding: 0 7px; border-radius: 9px; border: 1px solid var(--border); font-size: 11px; color: var(--muted); }
        .pill.active, .pill.paid { color: var(--ok); border-color: var(--ok); }
        .pill.reserved, .pill.pending { color: var(--warn); border-color: var(--warn); }
        .pill.sold, .pill.fulfilled { color: var(--accent); border-color: var(--accent); }
        .pill.refunded, .pill.declined, .pill.expired, .pill.cancelled { color: var(--err); border-color: var(--err); }
        #console { height: 220px; overflow: auto; background: #0a0d12; border: 1px solid var(--border); border-radius: 6px; padding: 8px; white-space: pre-wrap; font-size: 11.5px; }
        #console .t { color: var(--muted); }
        .kv { display: grid; grid-template-columns: auto 1fr; gap: 2px 10px; font-size: 12px; }
        .kv b { color: var(--muted); font-weight: normal; }
        .scroll { max-height: 260px; overflow: auto; }
        .hint { margin-top: 8px; padding: 8px 10px; border: 1px dashed #3a465c; border-radius: 6px; color: #aab4c5; font-size: 11.5px; line-height: 1.55; background: #121722; }
        .hint b { color: #e6e9ef; }
        details { margin-top: 6px; }
        summary { cursor: pointer; color: var(--muted); font-size: 11px; }
    </style>
</head>
<body>
<header>
    <h1>CS2 Trading <span class="muted">demo</span></h1>
    <div class="chips" id="chips"></div>
    <div class="spacer"></div>
    <div class="row" id="userbox"></div>
</header>

<main>
    <section>
        <h2>💼 Я / деньги</h2>
        <div class="kv" id="wallet"></div>
        <div class="row" style="margin-top:8px">
            <button class="primary" data-action="topup">Пополнить $10 (PSP)</button>
            <span class="muted">комиссия сделки: <span id="fee-hint">—</span></span>
        </div>
    </section>

    <section>
        <h2>🎒 Steam-инвентарь</h2>
        <div class="kv" id="steam-info"></div>
        <div class="row" style="margin-top:8px">
            <button data-action="sync" data-mode="real">Синк: live (Steam)</button>
            <button data-action="sync" data-mode="fixture">Синк: fixture</button>
            <span class="muted">очередь inventory.sync → воркер</span>
        </div>
        <div class="muted" id="items-hint" style="margin-top:6px"></div>
        <div class="scroll" style="margin-top:8px"><table id="items"></table></div>
    </section>

    <section class="wide">
        <h2>🛒 Витрина (активные листинги)
            <button class="warn" data-action="race">⚡ Гонка ×30 за листинг</button>
            <span class="muted">один победитель — инвариант «не продать дважды»</span>
        </h2>
        <div class="scroll"><table id="listings"></table></div>
    </section>

    <section>
        <h2>🤝 Мои сделки</h2>
        <div class="scroll"><table id="orders"></table></div>
        <div class="hint" id="orders-hint">Сделка: покупатель жмёт «Купить» → деньги в escrow, листинг = reserved → переключись на продавца (kyle/outso, кнопки входа сверху) и нажми «Принять» → деньги продавцу, предмет = sold. «Отклонить/Протух» — возврат покупателю.</div>
    </section>

    <section>
        <h2>💳 Вебхуки PSP (HMAC + идемпотентность)</h2>
        <div class="row">
            <button data-action="webhook" data-mode="valid">valid</button>
            <button data-action="webhook" data-mode="dup">dup ×10</button>
            <button data-action="webhook" data-mode="bad_sig">bad_sig</button>
            <button data-action="webhook" data-mode="stale">stale</button>
        </div>
        <div class="row" style="margin-top:6px">
            <span class="muted">режим mock-PSP:</span>
            <button data-action="psp-mode" data-mode="ok">ok</button>
            <button data-action="psp-mode" data-mode="timeout">timeout</button>
            <button data-action="psp-mode" data-mode="http_500">http_500</button>
        </div>
        <div class="muted" style="margin-top:6px">dup ×10: один event_id десять раз — баланс изменится один раз. bad_sig/stale → 401.</div>
    </section>

    <section>
        <h2>📨 Очереди (RabbitMQ)</h2>
        <div class="chips" id="queue-chips" style="margin-bottom:8px"></div>
        <div class="row">
            <button data-action="poison" data-jobs="1">Отравить ×1</button>
            <button data-action="poison" data-jobs="5">Отравить ×5</button>
            <button data-action="replay">Разобрать failed</button>
        </div>
        <div class="muted" style="margin-top:6px">яд: первая доставка падает → failed_jobs; «Разобрать» доставит повторно — и она пройдёт ✓</div>
    </section>

    <section>
        <h2>📜 Журнал событий (events)</h2>
        <div class="scroll"><table id="events"></table></div>
    </section>

    <section>
        <h2>📒 Ledger (двойная запись)</h2>
        <div class="scroll"><table id="ledger"></table></div>
    </section>

    <section class="wide">
        <h2>🖥 Вывод команд (demo:*)
            <button class="small" data-action="clear-console">очистить</button>
        </h2>
        <div id="console"></div>
    </section>
</main>

<script>
const $ = (id) => document.getElementById(id);
const csrf = document.querySelector('meta[name="csrf-token"]').content;
let busy = false;

function out(text, cls = '') {
    const el = $('console');
    const t = new Date().toLocaleTimeString();
    const span = document.createElement('span');
    span.innerHTML = `<span class="t">[${t}]</span> ${cls ? `<span class="${cls}">` : ''}${text.replace(/&/g,'&amp;').replace(/</g,'&lt;')}${cls ? '</span>' : ''}\n`;
    span.innerHTML = span.innerHTML.replace(/\[object Object\]/g, '');
    el.appendChild(span);
    el.scrollTop = el.scrollHeight;
}

async function api(path, method = 'GET', body = null, headers = {}) {
    const opts = { method, headers: { 'Accept': 'application/json', 'X-CSRF-TOKEN': csrf, ...headers } };
    if (body !== null) { opts.headers['Content-Type'] = 'application/json'; opts.body = JSON.stringify(body); }
    const res = await fetch(path, opts);
    let data = null;
    try { data = await res.json(); } catch (e) { data = { raw: await res.text().catch(() => '') }; }
    return { status: res.status, replay: res.headers.get('Idempotent-Replay'), data };
}

async function act(label, fn) {
    if (busy) { out('(подожди — предыдущее действие выполняется)', 'warn'); return; }
    busy = true;
    document.querySelectorAll('button').forEach(b => b.disabled = true);
    out('→ ' + label, 'muted');
    try {
        await fn();
    } catch (e) {
        out('✗ ' + (e && e.message ? e.message : e), 'err');
    } finally {
        busy = false;
        document.querySelectorAll('button').forEach(b => b.disabled = false);
        await refresh();
    }
}

function money(cents) { return (cents / 100).toFixed(2) + ' $'; }
const esc = (s) => String(s ?? '').replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/"/g,'&quot;');

/* ---------- rendering ---------- */

function renderUser(state) {
    const box = $('userbox');
    if (!state.user) {
        box.innerHTML = '<span class="muted">вход:</span>' +
            state.users.map(u => `<button data-action="login" data-slug="${esc(u.slug)}">${esc(u.name)}</button>`).join('') +
            '<button class="primary" data-action="steam-login">Войти через Steam</button>';
    } else {
        box.innerHTML = `<span>👤 <b>${esc(state.user.name)}</b> <span class="muted">(${esc(state.user.slug)})</span></span>
            <button data-action="logout">Выйти</button>`;
    }
}

function renderChips(state) {
    const s = state.status || {};
    const c = [];
    const add = (name, ok, info) => c.push(`<span class="chip ${ok ? 'ok' : 'err'}">${name}: ${esc(info)}</span>`);
    add('mysql', s.mysql?.ok, s.mysql?.info);
    add('redis', s.redis?.ok, s.redis?.ok ? 'up' : (s.redis?.info || 'down'));
    add('rabbitmq', s.rabbitmq?.ok, s.rabbitmq?.ok ? s.rabbitmq?.info : 'down');
    add('psp', s.psp?.ok, s.psp?.mode);
    add('steam', true, (s.steam?.mode || '?'));
    add('failed jobs', (s.queue_failed?.info === '0'), s.queue_failed?.info);
    $('chips').innerHTML = c.join('');
}

function renderWallet(state) {
    const b = state.balances || {};
    $('wallet').innerHTML = `
        <b>Баланс</b><span class="ok">${state.user ? money(b.self || 0) : '—'}</span>
        <b>Escrow</b><span>${money(b.escrow || 0)}</span>
        <b>Комиссии</b><span>${money(b.fees || 0)}</span>
        <b>PSP clearing</b><span>${money(b.psp_clearing || 0)}</span>`;
}

function renderSteam(state) {
    const s = state.steam;
    const info = $('steam-info');
    if (!s) {
        info.innerHTML = '<b>—</b><span class="muted">у выбранного пользователя нет Steam-аккаунта</span>';
    } else {
        info.innerHTML = `
            <b>SteamID64</b><span>${esc(s.steam_id64)}</span>
            <b>Персона</b><span>${esc(s.persona_name || '—')}</span>
            <b>Синк</b><span>${s.last_sync_at ? esc(s.last_sync_at.replace('T', ' ').slice(0, 19)) : '<span class="muted">ещё не было</span>'}</span>
            <b>Fixture</b><span>${s.fixture_available ? '<span class="ok">есть</span>' : '<span class="warn">нет</span>'}</span>`;
    }

    const items = state.inventory || [];
    const tradableCount = items.filter(i => i.tradable).length;
    const statusRu = { in_inventory: 'в инвентаре', listed: 'в продаже', sold: 'продан' };
    const rows = items.map(i => `
        <tr>
            <td title="${esc(i.market_hash_name)}">${esc(i.market_hash_name)}</td>
            <td>${i.tradable ? '<span class="ok">✓</span>' : '<span class="muted" title="Steam запрещает передачу: трейд-холд (новые покупки/обмены) или непередаваемый тип предмета (значки, часть граффити, стоковые и т.п.)">—</span>'}</td>
            <td><span class="pill ${esc(i.status)}">${esc(statusRu[i.status] || i.status)}</span></td>
            <td>${i.listable
                ? `<button class="small primary" data-action="list" data-id="${i.id}" data-hash="${esc(i.market_hash_name)}">Продать</button>`
                : (i.tradable ? '' : '<span class="muted" style="font-size:10px" title="Steam не разрешает передачу этого предмета — продать его нельзя, пока/если ограничение не снимется">не tradable</span>')}</td>
        </tr>`);
    $('items').innerHTML = '<tr><th>Предмет</th><th>tradable</th><th>статус</th><th></th></tr>' +
        (rows.length ? rows.join('') : `<tr><td colspan="4" class="muted">${state.user
            ? 'предметов нет — у этого пользователя пустой публичный инвентарь Steam. Выставлять можно только свои tradable-предметы: войди как kyle или outso'
            : 'войди как kyle/outso, чтобы увидеть Steam-инвентарь'}</td></tr>`);

    const ih = $('items-hint');
    if (ih) {
        ih.textContent = items.length
            ? `к продаже доступно: ${tradableCount} из ${items.length} — кнопка «Продать» только у tradable-предметов; у остальных Steam запрещает передачу (трейд-холд или непередаваемый тип)`
            : '';
    }
}

function renderListings(state) {
    const rows = (state.listings || []).map(l => `
        <tr>
            <td>#${l.id}</td>
            <td title="${esc(l.market_hash_name)}">${esc(l.market_hash_name)}</td>
            <td><b>${money(l.price_cents)}</b></td>
            <td>${esc(l.seller)}</td>
            <td><span class="pill ${esc(l.status)}">${esc(l.status)}</span></td>
            <td>${l.can_buy
                ? `<button class="small primary" data-action="buy" data-id="${l.id}">Купить</button>`
                : (l.mine ? '<span class="muted" style="font-size:10px">ваш лот</span>' : '')}</td>
        </tr>`);
    $('listings').innerHTML = '<tr><th>#</th><th>Предмет</th><th>Цена</th><th>Продавец</th><th>Статус</th><th></th></tr>' +
        (rows.length ? rows.join('') : '<tr><td colspan="6" class="muted">нет активных листингов</td></tr>');
}

function renderOrders(state) {
    const rows = [];
    for (const o of (state.orders?.sales || [])) {
        const canDecide = o.status === 'paid';
        rows.push(`<tr>
            <td>#${o.id} <span class="muted">прод.</span></td>
            <td title="${esc(o.market_hash_name)}">${esc(o.market_hash_name)}</td>
            <td>${money(o.price_cents)} <span class="muted">fee ${money(o.fee_cents)} (${esc(o.fee_variant || '—')})</span></td>
            <td><span class="pill ${esc(o.status)}">${esc(o.status)}</span>${o.offer_state ? ` <span class="pill">${esc(o.offer_state)}</span>` : ''}</td>
            <td>${canDecide ? `
                <button class="small primary" data-action="accept" data-id="${o.id}">Принять</button>
                <button class="small danger" data-action="decline" data-id="${o.id}">Отклонить</button>
                <button class="small warn" data-action="expire" data-id="${o.id}">Протух</button>` : ''}</td>
        </tr>`);
    }
    for (const o of (state.orders?.purchases || [])) {
        rows.push(`<tr>
            <td>#${o.id} <span class="muted">куп.</span></td>
            <td title="${esc(o.market_hash_name)}">${esc(o.market_hash_name)}</td>
            <td>${money(o.price_cents)}</td>
            <td><span class="pill ${esc(o.status)}">${esc(o.status)}</span>${o.offer_state ? ` <span class="pill">${esc(o.offer_state)}</span>` : ''}</td>
            <td></td>
        </tr>`);
    }
    $('orders').innerHTML = '<tr><th>Заказ</th><th>Предмет</th><th>Сумма</th><th>Статус</th><th></th></tr>' +
        (rows.length ? rows.join('') : '<tr><td colspan="5" class="muted">сделок ещё нет</td></tr>');

    const hint = $('orders-hint');
    if (hint) {
        const waiting = (state.orders?.sales || []).filter(o => o.status === 'paid');
        const mine = (state.orders?.purchases || []).filter(o => o.status === 'paid');
        if (waiting.length) {
            hint.innerHTML = '▶ Сделки ждут решения: нажми <b>«Принять»</b> (деньги продавцу, предмет sold) или <b>«Отклонить/Протух»</b> (возврат покупателю).';
        } else if (mine.length) {
            hint.innerHTML = '▶ Покупка оплачена, деньги лежат в escrow (листинг «reserved»). Переключись на продавца <b>' + esc(mine[0].seller) + '</b> (кнопки входа сверху) и нажми <b>«Принять»</b>.';
        } else {
            hint.innerHTML = 'Сделка: покупатель «Купить» → деньги в escrow (reserved) → продавец «Принять» → sold. Входы: kyle / outso / buyer — сверху.';
        }
    }
}

function renderQueues(state) {
    const q = state.status?.queues || {};
    $('queue-chips').innerHTML = Object.entries(q).map(([name, depth]) =>
        `<span class="chip ${depth > 0 ? 'err' : 'ok'}">${esc(name)}: ${depth}</span>`).join('') || '<span class="muted">нет данных (RabbitMQ недоступен?)</span>';
}

function renderEvents(state) {
    $('events').innerHTML = '<tr><th>время</th><th>тип</th></tr>' + ((state.events || []).map(e =>
        `<tr><td class="muted">${esc((e.at || '').replace('T', ' ').slice(11, 19))}</td><td>${esc(e.type)}</td></tr>`).join('')
        || '<tr><td colspan="2" class="muted">пусто</td></tr>');
}

function renderLedger(state) {
    $('ledger').innerHTML = '<tr><th>счёт</th><th>сумма</th><th>описание</th></tr>' + ((state.ledger || []).map(e =>
        `<tr><td>${esc(e.account)}</td><td class="${e.amount_cents < 0 ? 'err' : 'ok'}">${money(e.amount_cents)}</td><td class="muted" title="${esc(e.description)}">${esc(e.description)}</td></tr>`).join('')
        || '<tr><td colspan="3" class="muted">проводок нет</td></tr>');
}

/* ---------- data ---------- */

let lastState = null;

async function refresh() {
    const { data } = await api('/api/state');
    lastState = data;
    renderChips(data); renderUser(data); renderWallet(data); renderSteam(data);
    renderListings(data); renderOrders(data); renderQueues(data); renderEvents(data); renderLedger(data);
}

/* ---------- actions ---------- */

document.addEventListener('click', async (ev) => {
    const btn = ev.target.closest('button[data-action]');
    if (!btn) return;
    const a = btn.dataset.action;

    if (a === 'login') {
        const res = await api('/auth/demo', 'POST', { slug: btn.dataset.slug });
        if (res.status >= 400) out('✗ вход не удался', 'err'); else out('вход: ' + btn.dataset.slug, 'ok');
        window.location.reload(); return;
    }
    if (a === 'steam-login') { window.location.href = '/auth/steam/redirect'; return; }
    if (a === 'logout') {
        await api('/auth/logout', 'POST', {});
        window.location.reload(); return;
    }
    if (a === 'clear-console') { $('console').innerHTML = ''; return; }

    if (a === 'sync') {
        await act(`синк инвентаря (${btn.dataset.mode})`, async () => {
            const { data } = await api('/api/inventory/sync', 'POST', { mode: btn.dataset.mode });
            out(JSON.stringify(data));
            out('задача в очереди inventory.sync — воркер подхватит (смотри статус и инвентарь)', 'ok');
        });
        return;
    }

    if (a === 'list') {
        await act('выставить предмет', async () => {
            const hash = btn.dataset.hash;
            const p = await api('/api/price?hash=' + encodeURIComponent(hash));
            const suggest = p.data?.lowest_cents ? p.data.lowest_cents / 100 : 1;
            out(`рыночная цена (${p.data?.source}): ${p.data?.lowest ?? '—'}`);
            const input = prompt(`Цена в $ для:\n${hash}`, suggest.toFixed(2));
            if (input === null) { out('отменено'); return; }
            const cents = Math.round(parseFloat(String(input).replace(',', '.')) * 100);
            const { status, data } = await api('/api/listings', 'POST', { inventory_item_id: Number(btn.dataset.id), price_cents: cents });
            out(`HTTP ${status}: ` + JSON.stringify(data), status < 400 ? 'ok' : 'err');
        });
        return;
    }

    if (a === 'buy') {
        await act('покупка', async () => {
            const idem = crypto.randomUUID();
            const { status, data } = await api('/api/orders', 'POST', { listing_id: Number(btn.dataset.id) }, { 'Idempotency-Key': idem });
            out(`HTTP ${status}: ` + JSON.stringify(data), status < 400 ? 'ok' : 'err');
            if (status < 400) out('деньги в escrow, листинг = reserved. Переключись на продавца и нажми «Принять» в «Моих сделках».', 'ok');
        });
        return;
    }

    if (a === 'race') {
        const attempts = prompt('Сколько параллельных покупок?', '30');
        if (!attempts) return;
        await act(`гонка ×${attempts}`, async () => {
            const { data } = await api('/api/demo/race', 'POST', { attempts: Number(attempts) });
            out(data.output || JSON.stringify(data));
            out('проверка: ровно один заказ (см. витрину/сделки), остальные — 409-конфликты', 'ok');
        });
        return;
    }

    if (a === 'topup') {
        await act('пополнение $10 через PSP', async () => {
            const { status, data } = await api('/api/payments/topup', 'POST', { amount_cents: 1000 }, { 'Idempotency-Key': crypto.randomUUID() });
            out(`HTTP ${status}: ` + JSON.stringify(data), status < 400 ? 'ok' : 'err');
        });
        return;
    }

    if (a === 'webhook') {
        await act(`вебхуки PSP: ${btn.dataset.mode}`, async () => {
            const { data } = await api('/api/demo/webhook', 'POST', { mode: btn.dataset.mode });
            out(data.output || JSON.stringify(data));
        });
        return;
    }

    if (a === 'psp-mode') {
        await act(`режим PSP → ${btn.dataset.mode}`, async () => {
            const { status, data } = await api('/api/demo/psp-mode', 'POST', { mode: btn.dataset.mode });
            out(`HTTP ${status}: ` + JSON.stringify(data), status < 400 ? 'ok' : 'err');
        });
        return;
    }

    if (a === 'accept' || a === 'decline' || a === 'expire') {
        await act(`сделка #${btn.dataset.id}: ${a}`, async () => {
            const { status, data } = await api(`/api/orders/${btn.dataset.id}/${a}`, 'POST', {});
            out(`HTTP ${status}: ` + JSON.stringify(data), status < 400 ? 'ok' : 'err');
        });
        return;
    }

    if (a === 'poison') {
        await act(`отравить очередь ×${btn.dataset.jobs}`, async () => {
            const { data } = await api('/api/demo/queue-poison', 'POST', { jobs: Number(btn.dataset.jobs) });
            out(JSON.stringify(data) + ' — воркер сходит в ретраи, затем failed_jobs', 'warn');
        });
        return;
    }

    if (a === 'replay') {
        await act('разобрать failed_jobs', async () => {
            const { data } = await api('/api/demo/queue-replay', 'POST', {});
            out(data.output || JSON.stringify(data));
        });
        return;
    }
});

out('панель готова: жми кнопки и следи за журналом/статусами. Подсказка: начни с входа и «Синк: live».', 'ok');
refresh();
setInterval(() => { if (!busy) refresh().catch(() => {}); }, 4000);
</script>
</body>
</html>
