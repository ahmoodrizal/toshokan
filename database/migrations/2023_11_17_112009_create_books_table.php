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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id');
            $table->foreignId('publisher_id');
            $table->string('title', 150);
            $table->string('slug', 150)->unique();
            $table->string('isbn')->unique();
            $table->text('description')->nullable();
            $table->string('cover')->nullable();
            $table->date('release_date')->nullable();
            $table->string('language')->nullable();
            $table->string('page_number')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
