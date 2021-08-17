<?php

namespace Larva\Hashing;

class HashService extends \think\Service
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HashManager::class, function () {
            return new HashManager($this->app);
        });
    }
}
