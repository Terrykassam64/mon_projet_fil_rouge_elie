<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nos_servicesController extends Controller
{
    Public function accueil()
    {
        return view('accueil');
    }

    public function nos_services($userName)
    {
        return 'ceci est la page de nos services' . $userName;
    }

    public function notre_equipe()
    {
            return 'ceci est notre equipe';
        }
}
