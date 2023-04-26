<?php

declare(strict_types=1);

namespace Tests;

use BombenProdukt\PackagePowerPack\Tests\AbstractAnalysisTestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class AnalysisTest extends AbstractAnalysisTestCase
{
    public static function getPaths(): array
    {
        return [
            \realpath(__DIR__.'/../src'),
            \realpath(__DIR__),
        ];
    }
}
