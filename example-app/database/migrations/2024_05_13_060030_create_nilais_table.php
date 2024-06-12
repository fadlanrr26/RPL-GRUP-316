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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('mata_pelajaran_id');
            $table->integer('nilai');
            $table->string('tahunAjaran');
            $table->string('semester');
            $table->timestamps();
<<<<<<< HEAD
            $table->unique(['student_id', 'mata_pelajaran_id']);
=======
            $table->unique(['student_id', 'mata_pelajaran_id', 'semester']);
>>>>>>> origin/Damario

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
