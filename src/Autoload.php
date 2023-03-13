<?php

declare(strict_types=1);

namespace PreemStudio\ComposerParser;

use Spatie\LaravelData\Data;

final class Autoload extends Data
{
    /** @see https://getcomposer.org/doc/04-schema.md#psr-4 */
    public array $psr4;

    /** @see https://getcomposer.org/doc/04-schema.md#psr-0 */
    public array $psr0;

    /** @see https://getcomposer.org/doc/04-schema.md#classmap */
    public array $classmap;

    /** @see https://getcomposer.org/doc/04-schema.md#files */
    public array $files;

    /** @see https://getcomposer.org/doc/04-schema.md#exclude-files-from-classmaps */
    public array $excludeFromClassmap;
}
