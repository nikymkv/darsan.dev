<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminFront extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_front', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_front');
    }
}
