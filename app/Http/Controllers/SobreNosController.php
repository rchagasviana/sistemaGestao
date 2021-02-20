<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobrenos(){
        return "Você está acessando a rota /sobre-nos que, por sua vez, chamou o método
        sobrenos() que está pertence à classe SobreNosController";
    }
}
