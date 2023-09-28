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
        return view('ViewsAdmin.servicerequest'); // retornar la vista que quiero mostrar
    }
    public function apple()
    {
        return view('ViewsAdmin.apple'); // retornar la vista que quiero mostrar
    }
    public function establishment()
    {
        return view('ViewsAdmin.establishment'); // retornar la vista que quiero mostrar
    }
}

