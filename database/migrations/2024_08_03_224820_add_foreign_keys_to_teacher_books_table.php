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
        Schema::table('teacher_books', function (Blueprint $table) {
            //
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teacher_books', function (Blueprint $table) {
            //
        });
    }
};
