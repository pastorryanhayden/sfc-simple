<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleUpdates extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_updates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('headline')->nullable();
            $table->string('startdate')->nullable();
            $table->string('content')->nullable();
            $table->string('enddate')->nullable();
            $table->string('featured_image')->nullable();
            $table->boolean('visible')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_updates');
    }
}
