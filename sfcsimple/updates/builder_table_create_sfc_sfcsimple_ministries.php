<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleMinistries extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_ministries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('published')->nullable();
            $table->boolean('show_on_home_page')->nullable();
            $table->string('slug');
            $table->boolean('exclude_from_menus')->nullable();
            $table->string('group')->nullable();
            $table->text('description')->nullable();
            $table->string('meeting_time')->nullable();
            $table->string('meeting_place')->nullable();
            $table->text('body_content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_ministries');
    }
}
