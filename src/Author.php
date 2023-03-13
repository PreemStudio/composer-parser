<?php

declare(strict_types=1);

namespace PreemStudio\ComposerParser;

use Spatie\LaravelData\Data;

/** @see https://getcomposer.org/doc/04-schema.md#author */
final class Author extends Data
{
    public string $name;

    public ?string $email;

    public ?string $homepage;

    public ?string $role;
}
