<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleSermons extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_sermons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->date('date')->nullable();
            $table->string('text')->nullable();
            $table->string('mp3')->nullable();
            $table->string('speaker')->nullable();
            $table->string('service')->nullable();
            $table->string('series')->nullable();
            $table->string('youtube')->nullable();
            $table->string('slides')->nullable();
            $table->string('handout')->nullable();
            $table->string('featured_image')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_sermons');
    }
}
