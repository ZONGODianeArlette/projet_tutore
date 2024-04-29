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
        Schema::create('motmooresinguliers', function (Blueprint $table) {
            $table->id();
            $table->string('mot');
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('exemple')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motmooresinguliers');
    }
};
