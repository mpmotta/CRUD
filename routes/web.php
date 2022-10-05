<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Contato;

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


Route::post('/cadastrar', function (Request $info) {
    Contato::create([
        'uuid' => $info->uuid,
        'nome' => $info->nome,
        'email' => $info->email,
        'telefone' => $info->telefone
    ]);
    return view('/welcome', ['msg' => 'Contato cadastrado com sucesso!']);
});

Route::get('/edit/{id}', function ($id) {
    $contato = Contato::findOrFail($id);
    return view('edit', ['contato' => $contato]);
});

Route::put('/atualizar/{uuid}', function (Request $info, $id){
    $contato = Contato::findOrFail($id);
    $contato->nome = $info->nome;
    $contato->email = $info->email;
    $contato->telefone = $info->telefone;
    $contato->save();
    return view('/welcome', ['msg' => 'Contato atualizado com sucesso!']);
});

Route::get('/excluir/{uuid}', function ($id){
    $contato = Contato::findOrFail($id);
    $contato->delete();
    return view('/welcome', ['msg' => 'Contato excluído com sucesso!']);
});

