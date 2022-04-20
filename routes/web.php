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
    return view('start');
});

Route::get('/uitleg', function () {
    return view('uitleg');
});

Route::get('/credits', function () {
    return view('credits');
});

Route::get('/12', function () {
    return view('12');
});

// Spel
// Route::get('/spel', function () {
//     return view('spel');
// });

Route::get('/spel', [\App\Http\Controllers\SpelController::class,'show']);


//Levels
Route::get('/spel/1', [\App\Http\Controllers\MakeNumberController1::class,'level']);
Route::post('/spel/1', [\App\Http\Controllers\MakeNumberController1::class,'level']);

Route::get('/spel/2', [\App\Http\Controllers\MakeNumberController2::class,'level']);
Route::post('/spel/2', [\App\Http\Controllers\MakeNumberController2::class,'level']);

Route::get('/spel/3', [\App\Http\Controllers\MakeNumberController3::class,'level']);
Route::post('/spel/3', [\App\Http\Controllers\MakeNumberController3::class,'level']);

Route::get('/spel/4', [\App\Http\Controllers\MakeNumberController4::class,'level']);
Route::post('/spel/4', [\App\Http\Controllers\MakeNumberController4::class,'level']);

Route::get('/spel/5', [\App\Http\Controllers\MakeNumberController5::class,'level']);
Route::post('/spel/5', [\App\Http\Controllers\MakeNumberController5::class,'level']);

Route::get('/spel/6', [\App\Http\Controllers\MakeNumberController6::class,'level']);
Route::post('/spel/6', [\App\Http\Controllers\MakeNumberController6::class,'level']);

Route::get('/spel/7', [\App\Http\Controllers\MakeNumberController7::class,'level']);
Route::post('/spel/7', [\App\Http\Controllers\MakeNumberController7::class,'level']);

Route::get('/spel/8', [\App\Http\Controllers\MakeNumberController8::class,'level']);
Route::post('/spel/8', [\App\Http\Controllers\MakeNumberController8::class,'level']);

Route::get('/spel/9', [\App\Http\Controllers\MakeNumberController9::class,'level']);
Route::post('/spel/9', [\App\Http\Controllers\MakeNumberController9::class,'level']);

Route::get('/spel/10', [\App\Http\Controllers\MakeNumberController10::class,'level']);
Route::post('/spel/10', [\App\Http\Controllers\MakeNumberController10::class,'level']);