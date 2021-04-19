<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminPromotions extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_promotions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 256);
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_promotions');
    }
}
