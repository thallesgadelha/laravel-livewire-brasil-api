<?php

use App\Livewire\BuscarCep;
use App\Livewire\BuscarDdd;
use App\Livewire\SearchCnpj;
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

Route::get('/', function() {
    return view('index');
});
Route::get('/buscar-cep', BuscarCep::class)->name('buscar-cep');
Route::get('/buscar-cnpj', SearchCnpj::class)->name('buscar-cnpj');
