<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleEvents extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->dateTime('date');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->text('content')->nullable();
            $table->string('featured_image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_events');
    }
}
