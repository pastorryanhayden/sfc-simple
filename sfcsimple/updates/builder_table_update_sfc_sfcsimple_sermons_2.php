<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleSermons2 extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_sermons', function($table)
        {
            $table->boolean('is_published');
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_sermons', function($table)
        {
            $table->dropColumn('is_published');
        });
    }
}
