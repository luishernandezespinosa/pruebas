<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //const APP_LOGO = "https://luishernandezespinosa.es/onewebmedia/experiencia.png";

    public function index()
    {

        $logotipo = "texto prueba";
        return view('welcome');

    }
}
