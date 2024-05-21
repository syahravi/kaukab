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
        Schema::create('normalisasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alternatif');
            $table->unsignedBigInteger('kriteria_1');
            $table->unsignedBigInteger('kriteria_2');
            $table->unsignedBigInteger('kriteria_3');
            $table->unsignedBigInteger('kriteria_4');
            $table->unsignedBigInteger('kriteria_5');
            $table->unsignedBigInteger('kriteria_6');
            $table->unsignedBigInteger('kriteria_7');
            $table->timestamps();

            $table->foreign('alternatif')->references('id')->on('santri')->onDelete('cascade');
            $table->foreign('kriteria_1')->references('id')->on('criteria')->onDelete('cascade');
            $table->foreign('kriteria_2')->references('id')->on('criteria')->onDelete('cascade');
            $table->foreign('kriteria_3')->references('id')->on('criteria')->onDelete('cascade');
            $table->foreign('kriteria_4')->references('id')->on('criteria')->onDelete('cascade');
            $table->foreign('kriteria_5')->references('id')->on('criteria')->onDelete('cascade');
            $table->foreign('kriteria_6')->references('id')->on('criteria')->onDelete('cascade');
            $table->foreign('kriteria_7')->references('id')->on('criteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normalisasi');
    }
};
