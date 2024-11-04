<?php

declare(strict_types=1);

namespace BaseCodeOy\ComposerParser;

use Spatie\LaravelData\Data;

/** @see https://getcomposer.org/doc/04-schema.md#archive */
final class Archive extends Data
{
    public ?string $name;

    public ?array $exclude;
}
