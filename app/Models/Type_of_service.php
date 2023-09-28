<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_of_service extends Model
{
    use HasFactory;

    /* Relacion con el modelo de type_of_service */
    public function service_categories()
    {
        return $this->belongsTo(Service_Category::class);
    }
}

