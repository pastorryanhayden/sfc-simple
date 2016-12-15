<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleSermonsSpeakers extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_sermons_speakers', function($table)
        {
            $table->dropPrimary(['sermons_id','speakers_id']);
            $table->integer('sermon_id');
            $table->integer('speaker_id');
            $table->dropColumn('sermons_id');
            $table->dropColumn('speakers_id');
            $table->primary(['sermon_id','speaker_id']);
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_sermons_speakers', function($table)
        {
            $table->dropPrimary(['sermon_id','speaker_id']);
            $table->dropColumn('sermon_id');
            $table->dropColumn('speaker_id');
            $table->integer('sermons_id');
            $table->integer('speakers_id');
            $table->primary(['sermons_id','speakers_id']);
        });
    }
}
