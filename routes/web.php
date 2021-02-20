<?php
/*
Aula 10-Redirecionando rotas 
*/

use Illuminate\Support\Facades\Route;

/*
 O nome definido para rota tem o objetivo de facilitar a chamada de uma rota 
 sempre que for usada dentro da aplicação. Por exemplo, sempre que precisarmos, através de um link na view, 
 direcioná-la para /app/clientes podemoss chamá-la pelo seu "apelido".
 (observar as view's criadas que estão direcionando os links pelo nome da rota nesta aula.)
A vantagem de nomear as rotas é a indepência entre a rota e os links, umas vezes que estes
podem ser chamados através dos nomes e não do caminho da rota
 */
Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobrenos','SobreNosController@sobrenos')->name('site.sobrenos'); //pode ser escolhido qualquer nome, no entanto para efeitos de organização, usa-se o mesmo da view para qual o controlador irá direcionar
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::get('/login',function(){return "rotaLogin";});
//Rotas que serão destinadas à área restrita do sistema
Route::prefix('/app')->group(function(){// o método group() espera receber uma função de callback que receberás as rotas que farão paerte do grupo
    Route::get('/clientes',function(){return "rotaClientes";});
    Route::get('/fornecedores',function(){return "rotaFornecedores";});
    Route::get('/produtos',function(){return "rotaProdutos";});
});
//Aula de Redirecionamento de rotas
/*
Há duas formas de efetuar o redirecionamento: usando método redirect ou o retorno da função de callback
de um controlador
*/

//1°)Usando o redirect do método Route
Route::get('/rota01',function(){return "rota01";})->name('site.rota01');
Route::get('/rota02',function(){return "rota02";})->name('site.rota02');
//Redirecionando
Route::redirect('/rota01','/rota02'); // quando acessando /rota02, somos direcionados para /rota01

//2°)Usando a função de callback
Route::get('/rota04',function(){return "rota04";})->name('site.rota04');
//Redirecionando
Route::get('/rota03',function(){
    return redirect()->route('site.rota04');})->name('site.rota03');







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

