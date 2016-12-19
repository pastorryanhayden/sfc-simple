<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleLeaders extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_leaders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('leader_name');
            $table->string('position')->nullable();
            $table->text('content')->nullable();
            $table->boolean('is_senior_pastor')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_leaders');
    }
}
