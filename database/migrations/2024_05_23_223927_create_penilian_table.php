<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilianTable extends Migration
{
    public function up()
    {
        Schema::create('penilian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santri')->onDelete('cascade');
            $table->foreignId('criteria_id')->constrained('criteria')->onDelete('cascade');
            $table->float('nilai');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penilian');
    }
}
