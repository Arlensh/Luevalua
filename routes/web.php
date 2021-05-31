<?php

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

// Route to home page
Route::view('/', 'home')->name('home');

// These are the different routes that I use for the centers, calling the functions with the respective name of the page, also to some routes I pass variables for example for each type of center
Route::resource('centros', 'App\Http\Controllers\CentroController')->names('centros');
Route::patch('/centro/{centro}', 'App\Http\Controllers\CentroController@update')->name('centro.update');
Route::get('/centros/{centro}/comment', 'App\Http\Controllers\CentroController@create')->name('centros.create');
Route::post('/centros/{centro}', 'App\Http\Controllers\CentroController@store')->name('centros.store');
Route::delete('/centros/{centro}/comment', 'App\Http\Controllers\CentroController@destroy')->name('centros.destroy');

// Route for about me
Route::view('/about', 'about')->name('about');

// Route for contact
Route::view('/contact', 'contact')->name('contact');

// Route to validate the form data entered in the contact
Route::post('/contact', 'App\Http\Controllers\MessageController@store')->name('messages.store');

// With this route, laravel implements most of the login and registration functions
Auth::routes(['verify' => true]);

// Route that I use to change the language, calling the switchlang function of the LanguageController controller
Route::get('{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
