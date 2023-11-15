<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pokemonsController;
use App\Http\Controllers\typesController;


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

Route::get('pokemons', [pokemonsController::class, 'index'])->name('pokemons.index');

Route::get('types', [typesController::class, 'index'])->name('types.index');
   