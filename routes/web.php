<?php
/*
Aula 14-Sintaxe do Blade-Comentário em Sintaxe Blade e Inserção de Blocos PHP-Configurando docker
Blade é o motor de renderização de Views do Laravel e possui uma sintaxe
de programação PHP mais simples, além de um modelo de herança de tamplates que facilita
o reaporveitamento do código. É importante lembrar que a sintaxe pura do PHP não é impedida
de ser usada.
*/
use Illuminate\Support\Facades\Route;
/*O nome definido para rota tem o objetivo de facilitar a chamada de uma rota 
sempre que for usada dentro da aplicação. Por exemplo, sempre que precisarmos, através de um link na view, 
direcioná-la para /app/clientes podemoss chamá-la pelo seu "apelido".
(observar as view's criadas que estão direcionando os links pelo nome da rota nesta aula.)
A vantagem de nomear as rotas é a indepência entre a rota e os links, umas vezes que estes
podem ser chamados através dos nomes e não do caminho da rota*/
//Rotas-padrão
Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobrenos','SobreNosController@sobrenos')->name('site.sobrenos'); 
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::get('/login',function(){return "rotaLogin";});
//Rotas que serão destinadas à área restrita do sistema
Route::prefix('/app')->group(function(){//o método group() espera receber uma função de callback que receberás as rotas que farão paerte do grupo
    Route::get('/clientes',function(){return "rotaClientes";})->name('app.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',function(){return "rotaProdutos";})->name('app.produtos');
});
//Rota de fallback - Encaminha quando ocorre um erro na aplicação
Route::fallback(function(){
    return '<h1>Erro 404</h1><a href="'.route('site.index').'">Clique aqui</a> para ir para Página Inicial';
});
//Encaminhando parâmetros para o Controlador - Rota de teste
Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste')->where('p1','[0-9]+')->where('p2','[0-9]+');
