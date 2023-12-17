<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\imageController;
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