<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleSermonsSpeakers extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_sermons_speakers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('sermons_id');
            $table->integer('speakers_id');
            $table->primary(['sermons_id','speakers_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_sermons_speakers');
    }
}
