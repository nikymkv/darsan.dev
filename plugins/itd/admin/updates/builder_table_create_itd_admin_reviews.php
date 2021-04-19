<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminReviews extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type_name', 256);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_reviews');
    }
}
