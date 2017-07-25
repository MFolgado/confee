<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 24/07/17
 * Time: 15:12
 */

namespace Confee\Support\Http\Routing;


abstract class RouteFile {

    /**
     * @var array
     */
    protected $options;


    /**
     * @var \Illuminate\Routing\Router
     */
    protected $router;

    public function __construct($options = []){

        $this->options = $options;

        $this->router = app('router');
    }

    public function register(){
        $this->router->group($this->options, function(){
            $this->routes();
        });

    }

    /**
     * @return mixed
     */

    abstract protected function routes();
}