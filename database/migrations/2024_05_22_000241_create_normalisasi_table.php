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
            $table->foreign('alternatif')->references('id')->on('santri');
            $table->float('kriteria_1');
            $table->float('kriteria_2');
            $table->float('kriteria_3');
            $table->float('kriteria_4');
            $table->float('kriteria_5');
            $table->float('kriteria_6');
            $table->float('kriteria_7');
            $table->timestamps();

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
