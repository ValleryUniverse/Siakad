<?php

namespace App\Models;

use App\Models\Sekolah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';

    protected $fillable = [
        'nisn',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'm_sekolah_id',
        'm_kelas_id',
        'm_gender_id',
    ];
    public $timestamps = false;

    public function getSekolah() {
        return $this->belongsTo(Sekolah::class, 'm_sekolah_id');
    }
    public function getKelas() {
        return $this->belongsTo(Sekolah::class, 'm_kelas_id');
    }
    public function getGender() {
        return $this->belongsTo(Sekolah::class, 'm_gender_id');
    }
}
