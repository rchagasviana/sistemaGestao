<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{  
   /*
    Enviar parâmetros do controlado para view
    Há 3 formas de enviar parâmetros do controlador para view
    1°)Usando o Array associativo:
        return view('site.teste',['par1'=>$p1,'par2'=>$p2]);
        <!--1°)Como receber na View-->
            Parâmetro p1: {{$x}}
            Parâmetro p2: {{$y}}
    2°)Usando o método compact()
        <!--2°)Como receber na View-->
            Parâmetro p1: {{$p1}}
            Parâmetro p2: {{$p2}}
    3°)Usando o método with()
        <!--3°)Como receber na View-->
            Parâmetro p1: {{$x}}
            Parâmetro p2: {{$y}}
   */
    //enviando parâmetros para view "teste" que está dentro do diretório "site"
    public function teste(int $p1,int $p2){
        //return view('site.teste',['x'=>$p1,'y'=>$p2]);//1°)Usando o Array associativo
        //return view('site.teste',compact('p1','p2'));//2°)Usando o método compact()
        return view('site.teste')->with('x',$p1)->with('y',$p2);//3°)Usando o método with()
    }
}
