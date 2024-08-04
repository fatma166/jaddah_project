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
        Schema::create('student_processes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('process_time');
            $table->text('message');
            $table->enum('type',['login','start_exam','end_exam','exam_result','take_access']);
            $table->bigInteger('student_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_processes');
    }
};
