<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Jetpack\Tests\AbstractTestCase;
use Spatie\LaravelData\LaravelDataServiceProvider;

/**
 * @internal
 */
abstract class TestCase extends AbstractTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelDataServiceProvider::class,
        ];
    }
}
