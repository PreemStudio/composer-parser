<?php

declare(strict_types=1);

namespace Tests;

use BaseCodeOy\ComposerParser\Package;
use BaseCodeOy\ComposerParser\PackageFactory;

it('should create an instance from a path', function (): void {
    $package = PackageFactory::fromPath('vendor/spatie/laravel-data');

    expect($package)->toBeInstanceOf(Package::class);
    expect($package->name)->toBe('spatie/laravel-data');
});

it('should create an instance from a root', function (): void {
    $package = PackageFactory::fromRoot();

    expect($package)->toBeInstanceOf(Package::class);
    expect($package->name)->toBe('faustbrian/composer-parser');
});

it('should create an instance from a name', function (): void {
    $package = PackageFactory::fromName('spatie/laravel-data');

    expect($package)->toBeInstanceOf(Package::class);
    expect($package->name)->toBe('spatie/laravel-data');
});
