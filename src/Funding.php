<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\ComposerParser;

use Spatie\LaravelData\Data;

/** @see https://getcomposer.org/doc/04-schema.md#funding */
final class Funding extends Data
{
    public string $type;

    public string $url;
}
