<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apple extends Model
{
    use HasFactory;

    public function municipalities()
    {
        return $this->belongsTo(Municipality::class);
    }
}
