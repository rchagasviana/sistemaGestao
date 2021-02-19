<?php

use Illuminate\Support\Facades\Route;

//Aula 01 - Entendendo rodas sem redirecionar para uma view.

//Rota para página inicial da aplicação
Route::get('/', function () {
    echo "PáginaInicial";
});

//Rota para página sobre-nos
Route::get('/sobre-nos', function() {
    echo "sobre-nos";
});

//Rota para página de contatos
Route::get('/contatos',function(){
    echo "contatos";
});


