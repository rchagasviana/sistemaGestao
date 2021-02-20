<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //é preciso observar a sequência que os parâmetros estão sendo passado, no entanto o nome pode ser diferente
    public function teste(int $p1,int $p2){
        return "A soma é: ".($p1+$p2);
    }
}
