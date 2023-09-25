<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function apropos()
    {
        return view('apropos');
    }

    public function contact()
    {
        return view('contact');
    }

    public function librairie()
    {
        return view('librairie');
    }
    public function empl_sixieme()
    {
        return view('sixieme');
    }

    public function empl_cinquieme()
    {
        return view('cinquieme');
    }

    public function empl_quatrieme()
    {
        return view('quatrieme');
    }

    public function empl_troisieme()
    {
        return view('troisieme');
    }

    public function renseignement()
    {
        return view('fiche_renseignement');
    }
    
    public function galerie()
    {
        return view('galeries');
    }




}
