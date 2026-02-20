<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return "Gula donde darte un gustico no es un pecado!";
    }

    public function create()
    {
        return  "Aqui se creara un nuevo platillo para gula";
    }

    public function show()
    {
        return "Descripcion de un platillo";
    }
}
