<?php

declare(strict_types=1);

namespace BombenProdukt\ComposerParser;

use Spatie\LaravelData\Data;

/** @see https://getcomposer.org/doc/04-schema.md#funding */
final class Funding extends Data
{
    public string $type;

    public string $url;
}
