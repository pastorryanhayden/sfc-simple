<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleInfopage extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_infopage', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('featured_image')->nullable();
            $table->text('content')->nullable();
            $table->boolean('published')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_infopage');
    }
}
