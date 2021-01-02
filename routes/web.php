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

/*Route::get('/', function () {
    return view('welcome');
});
*/

/*Pages Routes*/
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('homePage');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('aboutPage');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contactPage');


/*Forms Routes*/
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form-submit');
















/*Auth Routes*/
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
