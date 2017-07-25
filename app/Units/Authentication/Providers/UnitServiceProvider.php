<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 24/07/17
 * Time: 14:05
 */

namespace Confee\Units\Authentication\Providers;



use Illuminate\Support\ServiceProvider;

class UnitServiceProvider extends ServiceProvider {

    public function register(){

        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }

}