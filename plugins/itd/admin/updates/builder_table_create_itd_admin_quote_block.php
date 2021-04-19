<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateItdAdminQuoteBlock extends Migration
{
    public function up()
    {
        Schema::create('itd_admin_quote_block', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 256);
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('itd_admin_quote_block');
    }
}
