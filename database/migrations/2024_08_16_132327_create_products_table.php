<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('image');
            $table->string('name');
            $table->string('slug');
            $table->uuid('product_category_id')->nullable()->index();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->uuid('product_service_id')->nullable()->index();
            $table->foreign('product_service_id')->references('id')->on('product_services')->onDelete('cascade');
            $table->string('price');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
