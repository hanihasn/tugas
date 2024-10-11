<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswaa extends Model
{
    use HasFactory;

    public function extra()
    {
        return $this->belongsToMany(Extra::class);
    }
}