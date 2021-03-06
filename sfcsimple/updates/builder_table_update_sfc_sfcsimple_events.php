<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleEvents extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_events', function($table)
        {
            $table->string('slug');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_events', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
        });
    }
}
