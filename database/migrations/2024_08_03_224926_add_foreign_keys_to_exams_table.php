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
        Schema::table('exams', function (Blueprint $table) {
            //
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('type_id')->references('id')->on('exam_types');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('group_id')->references('id')->on('departments');
            $table->foreign('exam_cycle_id')->references('id')->on('exam_cycles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exams', function (Blueprint $table) {
            //
        });
    }
};
