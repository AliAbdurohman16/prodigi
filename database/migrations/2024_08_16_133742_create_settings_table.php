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
            $table->id();
            $table->text('logo_color');
            $table->text('logo_white');
            $table->string('title');
            $table->string('desc');
            $table->text('hero');
            $table->text('about_image_1');
            $table->text('about_image_2');
            $table->text('about_image_3');
            $table->text('about_desc');
            $table->string('happy_client');
            $table->string('job_placement');
            $table->string('project_complete');
            $table->string('footer_desc');
            $table->string('email');
            $table->string('telepon');
            $table->string('whatsapp')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
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
