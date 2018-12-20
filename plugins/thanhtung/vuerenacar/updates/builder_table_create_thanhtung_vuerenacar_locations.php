<?php namespace Thanhtung\Vuerenacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhtungVuerenacarLocations extends Migration
{
    public function up()
    {
        Schema::create('thanhtung_vuerenacar_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanhtung_vuerenacar_locations');
    }
}
