<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Request extends Model
{
    use HasFactory;

    /* Relacion con el modelo de Service request */
    public function womens()
    {
        return $this->belongsTo(Women::class);
    }

    
}
