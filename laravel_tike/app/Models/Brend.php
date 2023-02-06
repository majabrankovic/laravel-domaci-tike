<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brend extends Model
{
    use HasFactory;

    public function patika()
    {
        return $this->hasMany(Patika::class);
    }

    public function kategorija()
    {
        return $this->belongsTo(Kategorija::class);
    }
}
