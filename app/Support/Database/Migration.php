<?php
/**
 * Created by PhpStorm.
 * User: blit
 * Date: 24/07/17
 * Time: 10:14
 */

namespace Confee\Support\Database;

use \Illuminate\Database\Migrations\Migration as LaravelMigration;


abstract class Migration extends LaravelMigration
{
    /**
     * @var \Iluminate\Database\Schema\Builder
     *
     */

    protected $schema;

    public function _construct(){
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    abstract function up();
    abstract function down();

}