<?php

namespace Probststefan\LaravelShopwareApi\Tests;

use Orchestra\Testbench\TestCase;
use Probststefan\LaravelShopwareApi\LaravelShopwareApiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelShopwareApiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
