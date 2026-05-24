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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('episode_number')->nullable();
            $table->string('duration')->nullable();
            $table->string('publish_date')->nullable();
            $table->string('youtube_id')->nullable();
            $table->string('spotify_url')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('podcasts');
    }
};
