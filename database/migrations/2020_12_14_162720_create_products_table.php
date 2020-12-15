<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('brand_id');
            $table->integer('city_id');
            $table->integer('area_id');
            $table->integer('warranty_id');
            $table->integer('age_id');
            $table->integer('condition_id');
            $table->integer('media_id');  
            $table->integer('memory_id');  
            $table->integer('harddrive_id');  
            $table->integer('processor_id');  
            $table->integer('price');
            $table->boolean('is_sold');
            $table->boolean('is_listed');

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
        Schema::dropIfExists('products');
    }
}
