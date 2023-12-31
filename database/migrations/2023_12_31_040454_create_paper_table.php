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
        Schema::create('paper', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('seminar_name');
            $table->string('penyelenggara');
            $table->date('date');
            $table->string('cover_image');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paper');
    }
};
