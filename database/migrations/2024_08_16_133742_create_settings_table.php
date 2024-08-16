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
        Schema::create('settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('logo_color');
            $table->string('logo_white');
            $table->string('title');
            $table->string('desc');
            $table->string('about_image_1');
            $table->string('about_image_2');
            $table->string('about_image_3');
            $table->string('about_desc');
            $table->string('happy_client');
            $table->string('job_placement');
            $table->string('project_complete');
            $table->string('footer');
            $table->string('email');
            $table->string('telepon');
            $table->string('whatsapp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
