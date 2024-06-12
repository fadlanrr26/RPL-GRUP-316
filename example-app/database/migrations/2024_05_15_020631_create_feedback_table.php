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
        Schema::create('lombas', function (Blueprint $table) {
            $table->id();
            $table->string('judulLomba');
            $table->text('deskripsiLomba');
            $table->enum('tingkatan', ['SD', 'SMP', 'SMA']);
=======
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('waliMuridId');
            $table->unsignedBigInteger('guruId');
            $table->string('judulFeedback');
            $table->text('feedback');

            $table->foreign('guruId')->references('id')->on('gurus')->onDelete('cascade');
            $table->foreign('waliMuridId')->references('id')->on('wali_murids')->onDelete('cascade');
>>>>>>> origin/Damario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('lombas');
=======
        Schema::dropIfExists('feedback');
>>>>>>> origin/Damario
    }
};
