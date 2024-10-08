<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pengguna()
    {
        return $this->belongsTo(pengguna::class,"id_pengguna");
    }
}
