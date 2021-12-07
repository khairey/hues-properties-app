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
            $table->string('title_en')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('brochure')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('slug')->unique();
            $table->string('address_en')->nullable();
            $table->string('address_ar')->nullable();
            $table->text('additional_info_en')->nullable();
            $table->text('additional_info_ar')->nullable();
            $table->text('details_en')->nullable();
            $table->text('details_ar')->nullable();
            $table->integer('developer_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('downpayment')->nullable();
            $table->integer('installments')->nullable();
            $table->integer('delivery_date')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('main_type')->nullable();
            $table->integer('deactive')->nullable(); 
            $table->text('image')->nullable();
            $table->text('meta_des')->nullable();
            $table->text('meta_key')->nullable();

            
            $table->integer('unit')->nullable();
            $table->integer('unit_area')->nullable();
            $table->integer('kitchen')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('masterroom')->nullable(); 
            $table->integer('property_type_id')->nullable(); 
            
            $table->integer('view_count')->default('1'); 

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
