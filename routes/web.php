<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pizzas', 'PizzaController@index');
// Route::get('/pizzas/{id}', 'PizzaController@show');

Route::get("/pizzas",[PizzaController::class,"index"]);
Route::get("/pizzas/create", [PizzaController::class, 'create'])->name('pizzas.index');
Route::post("/pizzas", [PizzaController::class, 'store']);
Route::get("/pizzas/{id}",[PizzaController::class,"show"]);
Route::delete('/pizzas/{id}', [ PizzaController::class,"destroy"]);