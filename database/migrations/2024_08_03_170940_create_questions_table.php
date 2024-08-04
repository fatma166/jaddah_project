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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('parent_id')->default(0);
            $table->string('title');
            $table->mediumText('image');
            $table->mediumText('video');
            $table->bigInteger('group_id')->unsigned();
            $table->enum('question_type', ['choose', 't_f','text','image']);
            $table->bigInteger('book_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
