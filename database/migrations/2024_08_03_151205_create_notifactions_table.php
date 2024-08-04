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
        Schema::create('notifactions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->mediumText('image');
            $table->tinyInteger('status');
            $table->string('target');
            $table->bigInteger('group_id')->unsigned()->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifactions');
    }
};