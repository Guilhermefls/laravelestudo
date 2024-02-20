<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/postagem', function () {
    //buscar todos os registros da tabela posts
    $postagemPost = App\Models\Post::all();
    $postagemCat = App\Models\Category::all();
    $postagemManual = App\Models\Manual::all();
    $postagemPerm=App\Models\Permission::all();
    $postagemRole=App\Models\Role::all();
    $postagemUser=App\Models\User::all();

    //retorna para a página 'palestras' com as variaveis
     return view('postagem.index',compact('postagemPost','postagemCat','postagemManual','postagemPerm','postagemRole','postagemUser'));
})->name('postagem');

Route::get('/categoria', function () {
    $categorias = App\Models\Category::all();
    //return view('categoria.index', ['categorias'=>$categorias]);
    return view('categoria.index', compact('categorias'));
})->name('categoria');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
