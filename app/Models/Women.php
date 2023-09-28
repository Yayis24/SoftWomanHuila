<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Women extends Model
{
    use HasFactory;

    /* Relacion con el modelo de user */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /* Relacion con el modelo de Service request */
    public function service_requests()
    {
        return $this->hasMany(Service_Request::class);
    }
}
