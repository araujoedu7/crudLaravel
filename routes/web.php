<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;
use GuzzleHttp\Promise\Create;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/cadastrar_candidato', function (Request $informacoes) {
    //Criar Usuario
    Candidato::create([
        'nome' => $informacoes->nome_candidato,
        'telefone' => $informacoes->telefone_candidato
    ]);
    echo "Candidato criado";
});

//Mostrar Usuario
Route::get('/mostrar_candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrfail($id_do_candidato);
    echo $candidato->nome;
    echo "<br />";
    echo $candidato->telefone;
});

Route::get('/editar_candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrfail($id_do_candidato);
    return view('editar_candidato', ['candidato' => $candidato]);
});

Route::put('/atualizar_candidato/id_do_candidato',  function (Request $informacoes, $id_do_candidato) {
    $candidato = Candidato::findOrfail($id_do_candidato);
    $candidato->nome = $informacoes->nome_candidato;
    $candidato->telefone = $informacoes->telefone_candidato;
    $candidato->save();
    echo "Canidato Atualizado com Sucesso!";
});

Route::get('/excluir_candidato/{id_do_candidato}',  function ($id_do_candidato) {
    $candidato = Candidato::findOrfail($id_do_candidato);
    $candidato->delete();
    echo "Candidato excluido";
});
