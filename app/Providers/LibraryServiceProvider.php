<?php

namespace Myst\Providers;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {X}

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        foreach(glob(app_path().'/Library/*.php') as $filename) {
            require_once($filename);
        }
    }
    
}