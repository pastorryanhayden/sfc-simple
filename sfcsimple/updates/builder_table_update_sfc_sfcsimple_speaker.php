<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleSpeaker extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_speaker', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('thumbnail');
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_speaker', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('thumbnail', 255)->nullable();
        });
    }
}
