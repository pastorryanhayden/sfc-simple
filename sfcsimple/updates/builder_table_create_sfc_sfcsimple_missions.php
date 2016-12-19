<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleMissions extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_missions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('field')->nullable();
            $table->string('continent')->nullable();
            $table->text('body_content')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_missions');
    }
}
