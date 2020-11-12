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
});

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesey crust', 'price' => 10],
        ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 12],
        ['type' => 'veg supreme', 'base' => 'thin & crispy', 'price' => 5]
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});