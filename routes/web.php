<?php
/*
Aula 13-Encaminhando parâmetros da controlador para view
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
Route::prefix('/app')->group(function(){//o método group() espera receber uma função de callback que receberás as rotas que farão paerte do grupo
    Route::get('/clientes',function(){return "rotaClientes";});
    Route::get('/fornecedores',function(){return "rotaFornecedores";});
    Route::get('/produtos',function(){return "rotaProdutos";});
});
//Rota de fallback
Route::fallback(function(){
    return '<h1>Erro 404</h1><a href="'.route('site.index').'">Clique aqui</a> para ir para Página Inicial';
});
//Encaminhando parâmetros para o Controlador
Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste')->where('p1','[0-9]+')->where('p2','[0-9]+');

/*
Atenção: É importante observar na ordem de recebimento dos valores pelo controlador.
Fica implícito que serão passados da seguinte forma TesteController@teste($p1,$p2), logo
a ordem com que os parâmetros serão recebido no método resposável deve ser respeitada
*/
