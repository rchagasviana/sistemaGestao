<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContatoController extends Controller
{
//enviar os dados para outra classe receber o retorno desta classe e retornar algo para view()

    public function contato(){
        return view('site.contato');
    }
}
