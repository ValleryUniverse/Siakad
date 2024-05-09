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
        Schema::create('t_penilaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id')->nullable(false)->index();
            $table->unsignedBigInteger('t_jadwal_id')->nullable(false)->index();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('t_jadwal_id')->references('id')->on('t_jadwal')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('nilai')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penilaian');
    }
};
