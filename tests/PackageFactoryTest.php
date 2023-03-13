<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\ComposerParser\Package;
use PreemStudio\ComposerParser\PackageFactory;

it('should create an instance from a path', function () {
    $package = PackageFactory::fromPath('vendor/spatie/laravel-data');

    expect($package)->toBeInstanceOf(Package::class);
    expect($package->name)->toBe('spatie/laravel-data');
});

it('should create an instance from a root', function () {
    $package = PackageFactory::fromRoot();

    expect($package)->toBeInstanceOf(Package::class);
    expect($package->name)->toBe('preemstudio/composer-parser');
});

it('should create an instance from a name', function () {
    $package = PackageFactory::fromName('spatie/laravel-data');

    expect($package)->toBeInstanceOf(Package::class);
    expect($package->name)->toBe('spatie/laravel-data');
});
