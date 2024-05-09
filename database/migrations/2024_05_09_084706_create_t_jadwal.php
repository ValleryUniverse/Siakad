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
        Schema::create('t_jadwal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('m_kelas_id')->nullable(false)->index();
            $table->unsignedBigInteger('m_pelajaran_id')->nullable(false)->index();
            $table->foreign('m_kelas_id')->references('id')->on('m_kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('m_pelajaran_id')->references('id')->on('m_pelajaran')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_jadwal');
    }
};
