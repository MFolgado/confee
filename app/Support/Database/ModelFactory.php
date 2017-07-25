<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 24/07/17
 * Time: 15:43
 */

namespace Confee\Support\Database;


use Illuminate\Database\Eloquent\Factory;
use Faker\Generator;

abstract class ModelFactory {

    /**
     * @var string
     */

    protected $model;


    /**
     * @var Factory
     */
    protected $factory;

    /**
     * @var Generator
     */
    protected $faker;

    /**
     * ModelFactory constructor
     */
    public function __construct(){

        $this->factory = app()->make(Factory::class);
        $this->faker = app()->make(Generator::class);

    }

    public function define(){
        $this->factory->define($this->model, function(){
           return $this->fields();
        });
    }


    /**
     * @return array
     */
    abstract protected function fields();

}