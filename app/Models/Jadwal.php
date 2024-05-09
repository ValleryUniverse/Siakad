<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 't_jadwal';

    protected $fillable = [
        'm_kelas_id',
        'm_pelajaran_id',
    ];
    public $timestamps = false;
    public function getKelas() {
        return $this->belongsTo(Kelas::class, 'm_kelas_id');
    }
    public function getPelajaran() {
        return $this->belongsTo(Pelajaran::class, 'm_pelajaran_id');
    }
}
