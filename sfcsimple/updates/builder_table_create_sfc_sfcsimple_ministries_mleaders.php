<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleMinistriesMleaders extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_ministries_mleaders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('ministry_id');
            $table->integer('mleader_id');
            $table->primary(['ministry_id','mleader_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_ministries_mleaders');
    }
}
