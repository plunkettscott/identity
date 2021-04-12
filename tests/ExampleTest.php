<?php

namespace Lavrahq\Identity\Tests;

use Orchestra\Testbench\TestCase;
use Lavrahq\Identity\IdentityServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [IdentityServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
