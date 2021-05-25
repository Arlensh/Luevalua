<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\App;
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

// Route::view('/', 'home', ['nombre' => 'Luciano'])->name('home'); //Politicas de privacidad, terminos y condiciones

Route::view('/', 'home')->name('home');
Route::resource('centros', 'App\Http\Controllers\CentroController')->names('centros');
Route::patch('/centro/{centro}', 'App\Http\Controllers\CentroController@update')->name('centro.update');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\MessageController@store')->name('messages.store');

// Auth::routes(['register' => false]);
Auth::routes();

// Cambiar el idioma
Route::get('{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

// Route::resource('centros', 'App\Http\Controllers\ProjectController')->names('projects')->parameters(['centros' => 'project']);
// Route::get('/portfolio', 'App\Http\Controllers\ProjectController@index')->name('projects.index');
// Route::get('/portfolio/create', 'App\Http\Controllers\ProjectController@create')->name('projects.create');
// Route::get('/portfolio/{project}/editar', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');
// Route::patch('/portfolio/{project}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');
// Route::post('portfolio', 'App\Http\Controllers\ProjectController@store')->name('projects.store');
// Route::get('/portfolio/{project}', 'App\Http\Controllers\ProjectController@show')->name('projects.show');
// Route::delete('/portfolio/{project}', 'App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');
