<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 24/07/17
 * Time: 16:05
 */

namespace Confee\Domains\Users\Database\Factories;


use Confee\Domains\Users\User;
use Confee\Support\Database\ModelFactory;


class UserFactory extends ModelFactory{

    protected $model = User::class;

    protected function fields(){

        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}