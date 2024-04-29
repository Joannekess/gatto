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
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            // $table->integer('kodePenyakit')->unsigned();
            // $table->foreign('kodePenyakit')->references('kodePenyakit')->on('diseases');
            // $table->integer('kodeGejala')->unsigned();
            // $table->foreign('kodeGejala')->references('kodeGejala')->on('symptoms');
            $table->unsignedBigInteger('penyakit_id');
            $table->foreign('penyakit_id')->references('id')->on('diseases');
            $table->unsignedBigInteger('gejala_id');
            $table->foreign('gejala_id')->references('id')->on('symptoms');
            $table->float('CFValue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};
