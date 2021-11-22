<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('brochure')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('slug')->nullable();
            $table->string('address')->nullable();
            $table->text('additional_info')->nullable();
            $table->text('details')->nullable();
            $table->integer('developer_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('downpayment')->nullable();
            $table->integer('delivery_date')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('unit_area')->nullable();
            $table->integer('kitchen')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('masterroom')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('main_type')->nullable();
            $table->integer('unit')->nullable(); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
