<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function paginaHome()
    {
        return view('home');
    }

    public function servicosInternos()
    {
        return view('servicosInternos');
    }

    public function categorias()
    {
        return view('categorias');
    }

    public function cadastroCategoria()
    {
        return view('cadastroCategoria');
    }

    public function marcas()
    {
        return view('marcas');
    }

    public function cadastroMarca()
    {
        return view('cadastroMarca');
    }

    public function homePet()
    {
        return view('homePet');
    }

}
