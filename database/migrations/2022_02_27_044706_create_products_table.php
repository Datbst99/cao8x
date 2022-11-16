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
            $table->unsignedBigInteger('category_id');
            $table->string('slug');
            $table->string('thumbnail')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->integer('price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->integer('amount')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();

            $table->index('status');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

//        Schema::create('product_pictures', function (Blueprint $table){
//            $table->id();
//            $table->unsignedBigInteger('product_id');
//            $table->string('origin_path');
//            $table->tinyInteger('general')->default(0);
//            $table->string('status');
//            $table->timestamps();
//
//
//            $table->index('status');
//            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
//        });
//
//        Schema::create('product_colors', function (Blueprint $table){
//           $table->id();
//           $table->unsignedBigInteger('product_id');
//           $table->unsignedBigInteger('product_picture_id');
//           $table->string('name')->nullable();
//           $table->integer('amount');
//           $table->timestamps();
//
//           $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
//           $table->foreign('product_picture_id')->references('id')->on('product_pictures')->onDelete('cascade');
//        });
//
//        Schema::create('product_sizes', function (Blueprint $table){
//            $table->id();
//            $table->unsignedBigInteger('product_id');
//            $table->string('name')->nullable();
//            $table->integer('amount');
//            $table->timestamps();
//
//            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
//        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('product_sizes');
//        Schema::dropIfExists('product_colors');
//        Schema::dropIfExists('product_pictures');
        Schema::dropIfExists('products');
    }
}
