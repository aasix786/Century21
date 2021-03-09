<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'ApiController@register');
Route::get('/confirm-account/{link?}', 'WebsiteController@confirm_account')->name('confirmAccount');
Route::post('/login', 'ApiController@login');
Route::post('/forgot-password', 'ApiController@forgot_password');
Route::post('/check-passcode', 'ApiController@check_passcode');
Route::post('/add-workout', 'ApiController@add_workout');
Route::post('/add-weight', 'ApiController@add_weigth');
Route::post('/add-block', 'ApiController@add_block');
Route::post('add-exercise', 'ApiController@add_exercise');
Route::post('/get-exercises', 'ApiController@get_exercises');
Route::post('/get-exercises-by-workout', 'ApiController@get_workout_exercise');
Route::post('/settings', 'ApiController@settings');
Route::get('get-workouts', 'ApiController@get_workouts');
Route::get('get-challenges', 'ApiController@get_challenges');
Route::post('get-challenge-exercises', 'ApiController@get_challenge_exercises');
Route::post('get-beginner-challenges', 'ApiController@get_beginner_challenges');
Route::post('get-beginner-exercises', 'ApiController@get_beginner_exercises');
Route::post('update-profile', 'ApiController@update_profile');
