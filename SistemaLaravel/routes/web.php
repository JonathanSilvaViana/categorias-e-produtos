<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('estoque/categoria', 'CategoriaController');

/*$this->get('/test-conn', function () {
    // Insere um novo usuário ao banco de dados:
    $user = \App\categoria::create([
        'nome'         => 'Carlos Ferreira',
        'descricao'     => bcrypt('SenhaAqui'),
        'condicao' => 0
    ]);
    // Se quiser exibir os dados do usuário: dd($user);

    // Listando os usuários
    $users = \App\categoria::get();

    echo '<hr>';
    foreach ($categoria as $catt) {
        echo "{$catt->nome} <br>";
    }
    echo '<hr>';
});*/