<?php

use Illuminate\Support\Facades\Auth;
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
    return view('startseite');
});

Route::get('/info', function () {
    return view('info');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('library', 'LibraryController');

Route::resource('tag', 'TagController');

Route::get('/library/tag/{tag_id}', 'LibraryTagController@getFilteredLibraries')->name('library_tag');

//Fremdzugriff von Tags unterbinden
Route::get('/library/{library_id}/tag/{tag_id}/attach', 'LibraryTagController@attachTag')
->name('library_tag_attach')->middleware('auth');
//Fremdzugriff von Tags unterbinden
Route::get('/library/{library_id}/tag/{tag_id}/detach','LibraryTagController@detachTag')
->name('library_tag_detach')->middleware('auth');;

//Bilder löschen
Route::get('/delete-image/library/{library_id}','LibraryController@deleteImages');
