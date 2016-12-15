<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleSeries extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_series', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_series');
    }
}
