<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return "Você está acessando a rota / (rota raiz) que, por sua vez, chamou o método
        principal() que está pertence à classe PrincipalController";
    }
}
