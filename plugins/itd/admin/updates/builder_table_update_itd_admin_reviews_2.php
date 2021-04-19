<?php namespace Itd\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateItdAdminReviews2 extends Migration
{
    public function up()
    {
        Schema::table('itd_admin_reviews', function($table)
        {
            $table->smallInteger('type')->unsigned();
            $table->string('type_name', 256)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('itd_admin_reviews', function($table)
        {
            $table->dropColumn('type');
            $table->smallInteger('type_name')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
