<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminFeedback extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_feedback', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 256);
            $table->string('address', 256);
            $table->string('phone', 64);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_feedback');
    }
}
