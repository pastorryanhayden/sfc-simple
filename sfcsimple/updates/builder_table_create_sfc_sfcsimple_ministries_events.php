<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleMinistriesEvents extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_ministries_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('ministry_id');
            $table->integer('event_id');
            $table->primary(['ministry_id','event_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_ministries_events');
    }
}
