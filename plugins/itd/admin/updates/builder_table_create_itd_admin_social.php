<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminSocial extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_social', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('vk_link', 256);
            $table->string('inst_link', 256);
            $table->string('inst_acccount', 256);
            $table->string('fb_link', 256);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_social');
    }
}
