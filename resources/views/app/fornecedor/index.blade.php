

<h1>Fornecedores</h1>

<strong>Funcionamento didático:</strong> 

<ul>
    <li>
        <strong>1° Passo:</strong> O usuário requisita -> <b>http://localhost:8000/app/fornecedores</li></b>
        </br><li><strong>2° Passo:</strong> A rota é recebida pelo servidor que por sua vez está agrupada
        da seguinte maneira: 
        <p><b>Route::prefix('/app')->group(function(){   
        <p>Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
        });</b></p>
    </li>
    <li>
        <strong>3° Passo:</strong>
        A seguinte rota indica que o método <b>index()</b> que pertence ao controlador <b>FornecedorController</b> será chamado
        e executará alguma ação.
        <p><b>Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores')</b></p>
        <p>
            <strong>ATENÇÃO!</strong>
            <p>o método <b>name('apelido')</b> serve para criar um apelido para a roda definida.</br>Por organização 
            define-se o caminho de onde está a view que será renderizada.</br> No caso acima,
            será direcionada para uma view que está dentro do diretório app/fornecedores</p>
            </p>
    </li>
   
    <li>
        <strong>4° Passo:</strong>
        <p>O método <b>index()</b> pertencente ao controlador <b>FornecedorController</b> retorna a view </br>
        <b>index.blade.php</b> que, por sua vez, é renderizada pelo motor de renderização do Laravel chamado Blade</p>

    </li>
  
</ul>