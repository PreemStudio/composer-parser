<?php

declare(strict_types=1);

namespace PreemStudio\ComposerParser;

use PreemStudio\ComposerParser\Mappers\KebabCaseMapper;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

/** @see https://getcomposer.org/doc/04-schema.md */
#[MapInputName(KebabCaseMapper::class)]
final class Package extends Data
{
    /** @see https://getcomposer.org/doc/04-schema.md#name */
    public string $name;

    /** @see https://getcomposer.org/doc/04-schema.md#description */
    public string $description;

    /** @see https://getcomposer.org/doc/04-schema.md#version */
    public ?string $version;

    /** @see https://getcomposer.org/doc/04-schema.md#type */
    public ?string $type;

    /** @see https://getcomposer.org/doc/04-schema.md#keywords */
    public ?array $keywords;

    /** @see https://getcomposer.org/doc/04-schema.md#homepage */
    public ?string $homepage;

    /** @see https://getcomposer.org/doc/04-schema.md#readme */
    public ?string $readme;

    /** @see https://getcomposer.org/doc/04-schema.md#time */
    public ?string $time;

    /** @see https://getcomposer.org/doc/04-schema.md#license */
    public string $license;

    /**
     * @see https://getcomposer.org/doc/04-schema.md#authors
     *
     * @var Author[]
     **/
    public ?array $authors;

    /** @see https://getcomposer.org/doc/04-schema.md#support */
    public ?Support $support;

    /** @see https://getcomposer.org/doc/04-schema.md#funding */
    public ?Funding $funding;

    /** @see https://getcomposer.org/doc/04-schema.md#require */
    public ?array $require;

    /** @see https://getcomposer.org/doc/04-schema.md#require-dev */
    public ?array $requireDev;

    /** @see https://getcomposer.org/doc/04-schema.md#conflict */
    public ?array $conflict;

    /** @see https://getcomposer.org/doc/04-schema.md#replace */
    public ?array $replace;

    /** @see https://getcomposer.org/doc/04-schema.md#provide */
    public ?array $provide;

    /** @see https://getcomposer.org/doc/04-schema.md#suggest */
    public ?array $suggest;

    /** @see https://getcomposer.org/doc/04-schema.md#autoload */
    public ?Autoload $autoload;

    /** @see https://getcomposer.org/doc/04-schema.md#autoload-dev */
    public ?Autoload $autoloadDev;

    /** @see https://getcomposer.org/doc/04-schema.md#include-path */
    public ?string $includePath;

    /** @see https://getcomposer.org/doc/04-schema.md#target-dir */
    public ?string $targetDir;

    /** @see https://getcomposer.org/doc/04-schema.md#minimum-stability */
    public ?string $minimumStability;

    /** @see https://getcomposer.org/doc/04-schema.md#prefer-stable */
    public ?string $preferStable;

    /** @see https://getcomposer.org/doc/04-schema.md#repositories */
    public ?array $repositories;

    /** @see https://getcomposer.org/doc/04-schema.md#config */
    public ?Config $config;

    /** @see https://getcomposer.org/doc/04-schema.md#scripts */
    public ?array $scripts;

    /** @see https://getcomposer.org/doc/04-schema.md#extra */
    public mixed $extra;

    /** @see https://getcomposer.org/doc/04-schema.md#bin */
    public ?string $bin;

    /** @see https://getcomposer.org/doc/04-schema.md#archive */
    public ?Archive $archive;

    /** @see https://getcomposer.org/doc/04-schema.md#abandoned */
    public ?bool $abandoned;

    /** @see https://getcomposer.org/doc/04-schema.md#non-feature-branches */
    public ?array $nonFeatureBranches;
}
