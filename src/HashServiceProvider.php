<?php

namespace Larva\Hashing;


class HashServiceProvider extends \think\Service
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('hash', function ($app) {
            return new HashManager($app);
        });

        $this->app->bind('hash.driver', function ($app) {
            return $app['hash']->driver();
        });
    }
}
