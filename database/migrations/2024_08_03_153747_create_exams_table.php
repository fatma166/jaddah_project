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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('details')->nullable();
            $table->tinyInteger('active');
            $table->bigInteger('book_id')->unsigned();
            $table->time('minutes');
            $table->integer('type_id', false, true)->length(10);
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable()->default(now());
            $table->bigInteger('teacher_id')->unsigned();
            $table->integer('degree');
            $table->integer('pass_degree');
            $table->integer('question_count');
            $table->bigInteger('group_id')->unsigned();

            $table->integer('exam_cycle_id', false, true)->length(10);
            $table->integer('tries');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
