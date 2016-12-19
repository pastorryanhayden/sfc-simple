<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleGalleries extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_galleries', function($table)
        {
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_galleries', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
