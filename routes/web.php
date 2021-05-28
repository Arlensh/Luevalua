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


Route::view('/', 'home')->name('home');
Route::resource('centros', 'App\Http\Controllers\CentroController')->names('centros');
Route::patch('/centro/{centro}', 'App\Http\Controllers\CentroController@update')->name('centro.update');
Route::get('/centros/{centro}/comment', 'App\Http\Controllers\CentroController@create')->name('centros.create');
Route::post('/centros/{centro}', 'App\Http\Controllers\CentroController@store')->name('centros.store');

// Route::get('/centros/comment', 'App\Http\Controllers\ComentarioController@')->name('comentarios.show');

// Route::post('/centros', 'App\Http\Controllers\ComentarioController@store')->name('centro.store');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\MessageController@store')->name('messages.store');

Auth::routes(['verify' => true]);

// // Cambiar el idioma
Route::get('{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);


// // Route::get('/comentarios', 'App\Http\Controllers\ComentarioController@index')->name('comentarios.index');
// // Route::get('/comentarios/create', 'App\Http\Controllers\ComentarioController@create')->name('comentarios.create');
// // Route::post('/comentarios', 'App\Http\Controllers\ComentarioController@store')->name('comentarios.store');

// // Route::get('/comentarios/{comentario}', 'App\Http\Controllers\ComentarioController@show')->name('comentarios.show');


// // Route::get('/comentario/create', 'App\Http\Controllers\ProjectController@create')->name('projects.create');
// // Route::get('/comentario/{project}/editar', 'App\Http\Controllers\ProjectController@edit')->name('projects.edit');
// // Route::patch('/comentario/{project}', 'App\Http\Controllers\ProjectController@update')->name('projects.update');
// // Route::post('comentario', 'App\Http\Controllers\ProjectController@store')->name('projects.store');
// // Route::get('/comentario/{project}', 'App\Http\Controllers\ProjectController@show')->name('projects.show');
// // Route::delete('/comentario/{project}', 'App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');
