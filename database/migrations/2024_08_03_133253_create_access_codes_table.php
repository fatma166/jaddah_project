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
        Schema::create('access_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->tinyInteger('status');
            $table->bigInteger('book_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('access_id')->unsigned();
            $table->timestamp('start_at');
            $table->timestamp('expired_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_codes');
    }
};
