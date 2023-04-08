<?php

declare(strict_types=1);

namespace PreemStudio\ComposerParser\Mappers;

use Illuminate\Support\Str;
use Spatie\LaravelData\Mappers\NameMapper;

final class KebabCaseMapper implements NameMapper
{
    public function map(int|string $name): string|int
    {
        if (!\is_string($name)) {
            return $name;
        }

        return \str_replace('_', '-', Str::kebab($name));
    }
}
