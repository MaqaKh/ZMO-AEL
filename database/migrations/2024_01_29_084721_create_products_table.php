<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();
            $table->decimal('price', 10, 2);
            $table->binary('pdf')->nullable();
            $table->string('code');
            $table->boolean('is_active')->default(false);
            $table->boolean('stock_status')->default(false);
            $table->string('image_path');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('main_categories');
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
};
