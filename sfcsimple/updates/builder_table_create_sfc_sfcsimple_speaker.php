<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleSpeaker extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_speaker', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('role')->nullable();
            $table->text('bio')->nullable();
            $table->string('thumbnail')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_speaker');
    }
}
