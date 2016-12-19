<?php namespace Sfc\SfcSimple\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSfcSfcsimpleMinistryPhotos extends Migration
{
    public function up()
    {
        Schema::create('sfc_sfcsimple_ministry_photos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('ministry_id');
            $table->integer('gallery_id');
            $table->primary(['ministry_id','gallery_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sfc_sfcsimple_ministry_photos');
    }
}
