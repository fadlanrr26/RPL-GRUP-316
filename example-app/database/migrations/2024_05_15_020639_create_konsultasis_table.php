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
<<<<<<< HEAD
        Schema::create('ekstrakurikulers', function (Blueprint $table) {
            $table->id();
            $table->string('judulEkstra');
            $table->text('deskripsiEkstra');
            $table->enum('tingkatan', ['SD', 'SMP', 'SMA']);
            $table->timestamps();
=======
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
>>>>>>> origin/Damario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('ekstrakurikulers');
=======
        Schema::dropIfExists('konsultasis');
>>>>>>> origin/Damario
    }
};
