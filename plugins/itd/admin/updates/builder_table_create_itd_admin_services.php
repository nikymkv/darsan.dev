<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminServices extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 256);
            $table->string('duration', 256);
            $table->text('description');
            $table->integer('type_service_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_services');
    }
}
