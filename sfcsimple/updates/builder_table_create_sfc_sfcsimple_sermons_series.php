<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleSermonsSeries extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_sermons_series', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('sermon_id');
            $table->integer('series_id');
            $table->primary(['sermon_id','series_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_sermons_series');
    }
}
