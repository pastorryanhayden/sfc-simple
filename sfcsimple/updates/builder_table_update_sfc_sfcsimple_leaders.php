<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleLeaders extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_leaders', function($table)
        {
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_leaders', function($table)
        {
            $table->dropColumn('phone');
            $table->dropColumn('email');
        });
    }
}
