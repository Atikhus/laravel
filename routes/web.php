<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/home',function(){
    return("hello word");
});

Route::get('/productos',[ProductoController::class,'index'])->name("productos");

//poner squi la ruta del controlador del crud
Route::resource('categoria',CategoriaController::class);



