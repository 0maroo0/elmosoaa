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
            $table->unsignedBigInteger("levelID");
            $table->unsignedBigInteger("chapterID");
            $table->string("firstChoose");
            $table->string("secondChoose");
            $table->string("thirdChoose");
            $table->string("fourthChoose");
            $table->string("correctChoose");
            $table->timestamps();
            $table->foreign('levelID')->references('id')->on('level');
            $table->foreign('chapterID')->references('id')->on('chapter');

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
