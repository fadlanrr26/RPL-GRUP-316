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
        Schema::create('lomba_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studentId');
            $table->unsignedBigInteger('lombaId');
            $table->string('hasil');
            $table->timestamps();

            $table->foreign('studentId')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('lombaId')->references('id')->on('lombas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lomba_students');
    }
};
