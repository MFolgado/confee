<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 25/07/17
 * Time: 15:32
 */

namespace Confee\Domains\Users\Database\Seeders;


use Confee\Domains\Users\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{

    public function run(){

        factory(User::class)->times(30)->create();

    }

}