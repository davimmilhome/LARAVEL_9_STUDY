<?php

use App\Http\Controllers\UserController;

// use App\Http\Controllers\{
//     UserController
// };

use Illuminate\Support\Facades\Route;


Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
//atenção no parâmetro dinâmico de users.id, rotas com parâmetro dinam tem que ser declaradas por último
Route::post('/users',[UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class,'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome');
});
