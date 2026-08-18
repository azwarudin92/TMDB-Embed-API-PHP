<?php
/**
 * Providers: NoTorrentProvider
 */

namespace App\Providers;

class NoTorrentProvider extends BaseProvider
{
    public function getName(): string
    {
        return 'notorrent';
    }

    public function isEnabled(): bool
    {
        return env('ENABLE_NOTORRENT', true);
    }

    protected function fetchStreams(
        string $tmdbId,
        string $mediaType,
        ?int $season = null,
        ?int $episode = null
    ): array {
        return [];
    }
}
