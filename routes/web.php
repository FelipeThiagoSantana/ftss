<?php

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

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/cursos', function () {
    return view('welcome');
})->name('site.curses');

Route::get('/contato', function () {
    return view('welcome');
})->name('site.contact');

Route::get('/projetos', function () {
    return view('welcome');
})->name('site.projects');

