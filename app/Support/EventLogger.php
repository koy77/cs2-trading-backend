<?php

namespace App\Support;

use App\Models\TrackedEvent;
use App\Models\User;
use Illuminate\Support\Collection;

/**
 * Аналитика: доменные события пишутся в таблицу events (см. report:daily).
 */
class EventLogger
{
    /** @param array<string, mixed> $meta */
    public function log(string $type, ?User $user = null, ?string $refType = null, ?int $refId = null, array $meta = []): TrackedEvent
    {
        return TrackedEvent::query()->create([
            'type' => $type,
            'user_id' => $user?->id,
            'ref_type' => $refType,
            'ref_id' => $refId,
            'meta' => $meta ?: null,
            'created_at' => now(),
        ]);
    }

    /** @return Collection<int, TrackedEvent> */
    public function recent(int $limit = 20): Collection
    {
        return TrackedEvent::query()->orderByDesc('id')->limit($limit)->get();
    }
}
