<?php

namespace Nagahshi\Monsternizer;

use Illuminate\Support\ServiceProvider;
use Nagahshi\Monsternizer\Avatar;
class MonsternizerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      return new Avatar();
    }
}
