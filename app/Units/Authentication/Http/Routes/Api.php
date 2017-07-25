<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 24/07/17
 * Time: 15:20
 */

namespace Confee\Units\Authentication\Http\Routes;


use Confee\Support\Http\Routing\RouteFile;
use Illuminate\Support\Facades\Request;

class Api extends RouteFile {


    protected function routes(){

       $this->registerDefaultRoutes();
       $this->registerV1Routes();


    }

    protected function registerDefaultRoutes(){
        $this->userRoutes();
    }

    protected function registerV1Routes(){

        $this->router->group(['prefix' => 'v1'], function(){
            $this->registerDefaultRoutes();
        });
    }


    protected function userRoutes(){
        $this->router->get('/user', function( Request $request){
            return $request->user();
        })->middleware('auth:api');
    }

    protected function loginRoutes(){
        $this->router->post('login', 'LoginController@login');
    }
}