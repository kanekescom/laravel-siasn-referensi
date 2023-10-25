<?php

namespace Kanekescom\Siasn\Referensi\Tests;

use Kanekescom\Siasn\Referensi\ReferensiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ReferensiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('siasn-api', require __DIR__.'/../vendor/kanekescom/laravel-siasn-api/config/siasn-api.php');
        $app['config']->set('siasn-referensi-api', require __DIR__.'/../vendor/kanekescom/laravel-siasn-referensi-api/config/siasn-referensi-api.php');
    }
}
