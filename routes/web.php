<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
    // return view('welcome');
//     return 'Aula de PW III';
// });

// Route::get('/quemsomos', function () {
//     return 'Quem somos';
// });

// Route::get('/contato', function () {
//     return 'Contato';
// });

// Route::get('/', 'App\Http\Controllers\PrincipalController@principal');
// Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal');
// Route::get('/contato', 'App\Http\Controllers\ContatoController@principal');

// Apelido nas rotas.
Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobrenos', 'App\Http\Controllers\SobreNosController@principal')->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@principal')->name('site.contato');

// Agrupamento de rotas.
Route::prefix('/admin')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; });
    // Route::get('/fornecedores', function() { return 'Fornecedores'; });
    // Route::get('/fornecedores', function() { return 'Fornecedores'; })->name('admin.fornecedores');
    // Route::get('/fornecedores', 'FornecedoresController@index')->name('admin.fornecedores');
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('admin.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; });
});

// Passagem de parâmetros no browser.
// Route::get('/contato/{nome}', function(string $nome) {
//     echo 'Passagem de parâmetros via browser: ' . $nome;
// });

// Passagem de parâmetros no browser.
// Route::get('/contato/{nome}/{mensagem?}', 
//     function(string $nome, string $mensagem = 'sem texto') {
//         echo "Passagem de parâmetros via browser: $nome - $mensagem";
//     });

// Passagem de parâmetros no browser.
Route::get('/admin', 
    function() {
        return redirect()->route('site.index');
    }
);

// Rota Fallback.
Route::fallback(function() {
        echo 'A rota não existe <a href= "'.route('site.index').'"> Clique aqui</a> ';
    }
);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';