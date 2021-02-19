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
/*
ATENÇÃO: 
Route:get(CAMINHO,AÇÃO);
CAMINHO: acessado pelo usuário. Exemplo: "/usuario/cadastrar", "/paginaInicial" etc.
AÇÃO: chamar um método e passar parâmetros para um controlador e posteriomente salvar em uma base de dados.
Retornar uma string ou algo do tipo.
*/

