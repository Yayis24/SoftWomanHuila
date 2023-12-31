<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /* Relacion con el modelo de usuarios */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
