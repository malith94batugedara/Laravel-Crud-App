<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;


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

Route::get('/table', function () {
    $data=App\Models\Task::all();
    return view('table')->with('tasks',$data);
    
});
//Route::get('/table','TableController@index');
Route::post('/save','App\Http\Controllers\TableController@store');
Route::get('/delete/{id}','App\Http\Controllers\TableController@delete');
Route::get('/update/{id}','App\Http\Controllers\TableController@update');
Route::post('/updatetasks','App\Http\Controllers\TableController@newupdate');
