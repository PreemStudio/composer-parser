<?php

declare(strict_types=1);

namespace BaseCodeOy\ComposerParser;

use Composer\InstalledVersions;

final class PackageFactory
{
    public static function fromPath(string $path): Package
    {
        return Package::from(\json_decode(\file_get_contents("{$path}/composer.json"), true, 512, \JSON_THROW_ON_ERROR));
    }

    public static function fromRoot(): Package
    {
        return self::fromPath(InstalledVersions::getRootPackage()['install_path']);
    }

    public static function fromName(string $name): Package
    {
        return self::fromPath(base_path("vendor/{$name}"));
    }
}
