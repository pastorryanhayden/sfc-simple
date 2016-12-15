<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSfcSfcsimpleSeries extends Migration
{
    public function up()
    {
        Schema::table('sfc_sfcsimple_series', function($table)
        {
            $table->string('slug');
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('sfc_sfcsimple_series', function($table)
        {
            $table->dropColumn('slug');
            $table->text('description')->nullable(false)->change();
        });
    }
}
