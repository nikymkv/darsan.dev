<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminServices extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_services', function($table)
        {
            $table->decimal('price', 10, 2);
            $table->dropColumn('title');
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_services', function($table)
        {
            $table->dropColumn('price');
            $table->string('title', 256);
        });
    }
}
