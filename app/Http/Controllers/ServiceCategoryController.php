<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function category(){
        return view('ViewsAdmin.category');
    }
}
