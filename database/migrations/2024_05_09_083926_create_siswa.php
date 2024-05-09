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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nisn')->nullable(false);
            $table->string('nama')->nullable(false);
            $table->string('tempat_lahir')->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
            $table->string('alamat')->nullable(false);
            $table->unsignedBigInteger('m_sekolah_id')->nullable(false)->index();
            $table->unsignedBigInteger('m_kelas_id')->nullable(false)->index();
            $table->unsignedBigInteger('m_gender_id')->nullable(false)->index();
            $table->foreign('m_sekolah_id')->references('id')->on('m_sekolah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('m_kelas_id')->references('id')->on('m_kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('m_gender_id')->references('id')->on('m_gender')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
