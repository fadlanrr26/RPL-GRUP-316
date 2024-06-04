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
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('waliMuridId');
            $table->unsignedBigInteger('studentId');
            $table->unsignedBigInteger('guruId');
            $table->date('date');
            $table->string('topik');
            $table->timestamps();

            $table->foreign('guruId')->references('id')->on('gurus')->onDelete('cascade');
            $table->foreign('waliMuridId')->references('id')->on('wali_murids')->onDelete('cascade');
            $table->foreign('studentId')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasis');
    }
};
