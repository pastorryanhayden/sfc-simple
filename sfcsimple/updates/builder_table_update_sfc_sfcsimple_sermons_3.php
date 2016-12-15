<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleSermons3 extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_sermons', function($table)
        {
            $table->dropColumn('mp3');
            $table->dropColumn('slides');
            $table->dropColumn('handout');
            $table->dropColumn('featured_image');
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_sermons', function($table)
        {
            $table->string('mp3', 255)->nullable();
            $table->string('slides', 255)->nullable();
            $table->string('handout', 255)->nullable();
            $table->string('featured_image', 255)->nullable();
        });
    }
}
