<?php

namespace WdevRs\LaravelAnalyticsLite\Tests;

use WdevRs\LaravelAnalyticsLite\LaravelAnalyticsLiteServiceProvider;

/**
 * Class TestCase base Class for test cases
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate', ['--database' => 'testing'])->run();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAnalyticsLiteServiceProvider::class
        ];
    }
}
