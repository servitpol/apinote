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

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => ['jwt.verify']], function () {

    Route::get('note', 'NoteController@notes');
    Route::get('note/{note_id}', 'NoteController@noteById');

    Route::post('note', 'NoteController@noteCreate');
    Route::put('note/{note}', 'NoteController@noteEdit');
    Route::delete('note/{note}', 'NoteController@noteDelete');

    Route::get('refresh', 'UserController@refresh');

});
