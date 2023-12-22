<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\UserController;
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

Route::get('/produto',[ProdutoController::class, 'index']
 )->name('produto.index');

 //create
 Route::get('/produto/create',[ ProdutoController::class, 'create']
 )->name('produto.create');

 Route::post('/produto/create',[ProdutoController::class, 'store']
 )->name('produto.store');
//apresentar
 Route::get('/produto/{id}',[ProdutoController::class, 'show' ]
 )->name('produto.show');

 Route::get('/image/upload', [ImageController::class, 'create']);
 Route::post('/image/upload', [ImageController::class, 'store'])->name('image.store');
 Route::get('/images', [ImageController::class, 'index'])->name('image.index');


 Route::get('/cadastro/criar', [UserController::class, 'create']);
 Route::post('/cadastro/criar', [UserController::class, 'store'])->name('cadastro.store');
 Route::get('/apresenta-cadastro', [UserController::class, 'index'])->name('cadastro.index');
 Route::get('/mostra-cadastro',[UserController::class, 'show'])->name('cadastro.show');