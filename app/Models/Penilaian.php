<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'm_gender';

    protected $fillable = [
        'siswa_id',
        't_jadwal_id',
        'nilai',
    ];
    public $timestamps = false;

    public function getSiswa() {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
    public function getJadwal() {
        return $this->belongsTo(Jadwal::class, 't_jadwal_id');
    }
}
