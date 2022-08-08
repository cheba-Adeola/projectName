<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/test',["uses"=>'App\Http\Controllers\testController@fun'])->name('test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/ami', function () {
    return view('ami');
})->name('ami');

Route::get('/home1', function () {
    $date=now();
    return view('home1',compact("date"));
})->name('Home1');


Route::get('/creer-publication', [App\Http\Controllers\PublicationController::class, 'create'])->middleware('auth')->name('formulaire_creation_publication');

Route::post('/sauvegarder-publication', [App\Http\Controllers\PublicationController::class, 'store'])->middleware('auth')->name('creer_publication');


