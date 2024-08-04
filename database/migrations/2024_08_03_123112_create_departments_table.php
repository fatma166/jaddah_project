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
        Schema::create('departments', function (Blueprint $table) {
             $table->id();
            $table->string('name');
            $table->bigInteger('parent_id')->default(0);
            $table->integer('university_id', false, true)->length(10);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('university_id')
                ->references('id')
                ->on('universities')
                ->onDelete('cascade');

          /*  $table->foreign('parent_id')
                ->references('id')
                ->on('departments');*/
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
