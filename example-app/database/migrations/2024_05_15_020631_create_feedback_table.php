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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('waliMuridId');
            $table->unsignedBigInteger('guruId');
            $table->string('judulFeedback');
            $table->text('feedback');

            $table->foreign('guruId')->references('id')->on('gurus')->onDelete('cascade');
            $table->foreign('waliMuridId')->references('id')->on('wali_murids')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
