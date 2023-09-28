<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_Category extends Model
{
    use HasFactory;

    /* Relacion con el modelo de type_of_service */
    public function type_of_services()
    {
        return $this->hasMany(Type_of_service::class);
    }
}
