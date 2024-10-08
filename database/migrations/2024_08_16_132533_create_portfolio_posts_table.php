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
        Schema::create('portfolio_posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->uuid('portfolio_category_id')->nullable()->index();
            $table->foreign('portfolio_category_id')->references('id')->on('portfolio_categories')->onDelete('cascade');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_posts');
    }
};
