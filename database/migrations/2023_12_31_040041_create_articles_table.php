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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('jornal_name');
            $table->string('journal_volume');
            $table->string('journal_number')->nullable();
            $table->string('journal_page');
            $table->string('isbn');
            $table->string('publisher');
            $table->string('cover_image');
            $table->string('doi')->nullable();
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
