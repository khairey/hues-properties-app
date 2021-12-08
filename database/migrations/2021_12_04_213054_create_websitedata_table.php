<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websitedata', function (Blueprint $table) {
            $table->id();
            $table->text('company_name')->nullable();
            $table->text('video')->nullable();
            $table->text('about_title')->nullable();
            $table->text('about_sub_title')->nullable();
            $table->text('about_details')->nullable();
            $table->text('services_details')->nullable();
            $table->text('team_details')->nullable();
            $table->text('office_location')->nullable();
            $table->text('address')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websitedata');
    }
}
