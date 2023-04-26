<?php

declare(strict_types=1);

namespace BombenProdukt\ComposerParser;

use BombenProdukt\ComposerParser\Mappers\KebabCaseMapper;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

#[MapInputName(KebabCaseMapper::class)]
final class Autoload extends Data
{
    /**
     * @see https://getcomposer.org/doc/04-schema.md#psr-4
     */
    public array $psr_4;

    /**
     * @see https://getcomposer.org/doc/04-schema.md#psr-0
     */
    public array $psr_0;

    /**
     * @see https://getcomposer.org/doc/04-schema.md#classmap
     */
    public array $classmap;

    /**
     * @see https://getcomposer.org/doc/04-schema.md#files
     */
    public array $files;

    /**
     * @see https://getcomposer.org/doc/04-schema.md#exclude-files-from-classmaps
     */
    public array $excludeFromClassmap;
}
