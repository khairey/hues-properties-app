<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project', function($table) {
            $table->string('image')->nullable();
            $table->text('meta_des')->nullable();
            $table->text('meta_key')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project', function($table) {
            $table->dropColumn('image');
            $table->dropColumn('meta_des');
            $table->dropColumn('meta_key');
        });
    }
}
