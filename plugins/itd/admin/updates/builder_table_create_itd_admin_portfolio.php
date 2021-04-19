<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminPortfolio extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_portfolio', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('type_service_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_portfolio');
    }
}
