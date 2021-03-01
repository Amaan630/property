<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::resource('property', 'App\Http\Controllers\Property\PropertyController');
Route::resource('site', 'App\Http\Controllers\SiteController');
Route::get('site/{site}/form/{form}', 'App\Http\Controllers\TopicController@show')->name('site.form.show');

Route::get('site/{site}/edit/{form}', 'App\Http\Controllers\TopicController@edit')->name('site.form.edit');
//Route::post('site.form', 'App\Http\Controllers\TopicController@store')->name('site.form.store');

//Route::resource('topic', 'App\Http\Controllers\TopicController');

Route::post('/waitlist', 'App\Http\Controllers\WaitlistController@store');
Route::post('/site/new', 'App\Http\Controllers\SiteController@store');
Route::post('/site/form', 'App\Http\Controllers\TopicController@store');
Route::post('/site/edit/update-form', 'App\Http\Controllers\TopicController@update');
Route::post('/site/edit/new-question', 'App\Http\Controllers\QuestionController@store');
Route::post('/site/delete-form', 'App\Http\Controllers\TopicController@destroy');
Route::post('/site/delete-link', 'App\Http\Controllers\LinkController@destroy');
Route::post('/site/update-link', 'App\Http\Controllers\LinkController@update');
Route::post('/site/create-link', 'App\Http\Controllers\LinkController@store');
Route::post('/site/delete-question', 'App\Http\Controllers\QuestionController@destroy');

Route::post('site/open-link', 'App\Http\Controllers\LinkController@show');
//Route::post('/site/form/question', 'App\Http\Controllers\QuestionController@store');
