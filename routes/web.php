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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register'=> false]);

Route::group(['middleware'=> 'auth'], function(){

    Route::get('/dashboard', 'HomeController@index');


//    ................TEAM.................
    Route::get('/team', 'TeamController@index');
    Route::get('/add-member', 'TeamController@add_member');
    Route::post('/submit-member', 'TeamController@submit_member');
//    ................INFORMATION EVE.................
    Route::get('/information-evening', 'EventController@index');
    Route::get('/add-event', 'EventController@add_event');
    Route::post('/submit-event', 'EventController@submit_event');


});
Route::get('/home', 'PublicController@index')->name('index');
Route::get('/agence-cedimmo', 'PublicController@agence_cedimmo')->name('team');
