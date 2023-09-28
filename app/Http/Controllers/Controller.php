<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function solicitudservicies()
    {
        return view('solicituddeservicio'); // retornar la vista que quiero mostrar
    }
    public function manzanas()
    {
        return view('manzanas'); // retornar la vista que quiero mostrar
    }
}
