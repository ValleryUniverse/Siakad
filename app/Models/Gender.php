<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    
    protected $table = 'm_gender';

    protected $fillable = [
        'title',
    ];
    public $timestamps = false;
}
