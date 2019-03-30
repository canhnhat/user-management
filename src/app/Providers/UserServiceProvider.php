<?php

namespace NTCDev\User\App\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $src_path = realpath(__DIR__ . '/../../');
        $migration_path = realpath($src_path . '/migrations');
        $this->loadMigrationsFrom($migration_path);
    }
}
