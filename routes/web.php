<?php
/*
Aula 08- Agrupamento de Rotas 
Objetivo: separar as páginas públicas das páginas restritas
*/

use Illuminate\Support\Facades\Route;

Route::get('/','PrincipalController@principal');
Route::get('/sobrenos','SobreNosController@sobrenos');
Route::get('/contato','ContatoController@contato');
Route::get('/login',function(){return "rotaLogin";});
//Rotas que serão destinadas à área restrita do sistema
Route::prefix('/app')->group(function(){// o método group() espera receber uma função de callback que receberás as rotas que farão paerte do grupo
    Route::get('/clientes',function(){return "rotaClientes";});
    Route::get('/fornecedores',function(){return "rotaFornecedores";});
    Route::get('/produtos',function(){return "rotaProdutos";});
});

/*
ATENÇÃO: 
Route:get(CAMINHO,AÇÃO);
Dentro do modelo MVC, a ação a ser chamada para execução é uma método dentro de um Controlador 
Exemplo: 
    -Sintaxe: Route:get('rota','ClasseController@nomeDoMétodo');
    Exemplo:  Route:get('/usuario','UsuarioControlle@listarTodos');
Neste caso, ao acessar a rota /usuario o método listarTodos que está dentro da classe UsuarioController
é acionado para executar uma ação (passar parâmetros para uma classe reposável por buscar os usuários
em uma base dados e depois retornar os dados para uma view, por exemplo)

para criar uma nova classe que funcionará como um Controller, pode-se utilizar
o comando "php artisan make:controller nomeDaClasseController". O Nome no "Controller" no final da classe é
apenas um quesito de boas práticas, uma vez que a herança da classe Controller é que garante as funcionalidades
à classe.
*/

