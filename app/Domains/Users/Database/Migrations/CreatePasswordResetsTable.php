<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 24/07/17
 * Time: 10:24
 */

namespace Confee\Domains\Users\Database\Migrations;


use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordResetsTable extends Migration{

    public function up(){

        $this->schema->create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

    }

    public function down(){

        $this->schema->drop('password_resets');

    }

}