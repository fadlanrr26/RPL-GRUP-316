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
        Schema::create('administrasis', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->timestamps();
=======
            $table->unsignedBigInteger("studentId");
            $table->unsignedBigInteger("waliMuridId")->nullable();
            $table->string('tahunAjaran');
            $table->string('semester');
            $table->integer('SPP');
            $table->date('batasWaktu');
            $table->string('alasan')->nullable();
            $table->integer('totalTagihan');
            $table->integer('mangkir')->nullable();
            $table->string('status');
            $table->timestamps();

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
        Schema::dropIfExists('administrasis');
    }
};
