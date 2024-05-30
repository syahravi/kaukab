<?php
// database/migrations/2024_05_23_000003_create_nilai_akhir_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiAkhirTable extends Migration
{
    public function up()
    {
        Schema::create('nilai_akhir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santri')->onDelete('cascade');
            $table->float('nilai_akhir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilai_akhir');
    }
}