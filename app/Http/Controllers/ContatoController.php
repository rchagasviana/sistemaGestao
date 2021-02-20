<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        return "Você está acessando a rota /contato que, por sua vez, chamou o método
        contato() que está pertence à classe ContatoController";
    }
}
