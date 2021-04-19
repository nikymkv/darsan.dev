<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminInstBlock extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_inst_block', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('text', 256);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_inst_block');
    }
}
