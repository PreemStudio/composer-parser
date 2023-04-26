<?php

declare(strict_types=1);

namespace BombenProdukt\ComposerParser;

use Spatie\LaravelData\Data;

/** @see https://getcomposer.org/doc/04-schema.md#support */
final class Support extends Data
{
    public ?string $email;

    public ?string $issues;

    public ?string $forum;

    public ?string $wiki;

    public ?string $irc;

    public ?string $source;

    public ?string $docs;

    public ?string $rss;

    public ?string $chat;

    public ?string $security;
}
