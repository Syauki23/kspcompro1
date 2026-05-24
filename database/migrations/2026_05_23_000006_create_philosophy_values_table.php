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
        Schema::create('philosophy_values', function (Blueprint $table) {
            $table->id();
            $table->char('letter', 1);
            $table->integer('index')->unique(); // 0 to 10
            $table->string('title');
            $table->text('description');
            $table->text('features')->nullable(); // JSON list
            $table->string('icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('philosophy_values');
    }
};
