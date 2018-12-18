<?php namespace Thanhtung\Vuerenacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhtungVuerenacarVehicles extends Migration
{
    public function up()
    {
        Schema::create('thanhtung_vuerenacar_vehicles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanhtung_vuerenacar_vehicles');
    }
}
