<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\ComposerParser\Mappers;

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
