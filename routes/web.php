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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function (){
    return view('home');
});
Route::prefix('ntx')->group(function (){
    //Main Page
    Route::get('game', function (){
        return view('game');
    });
    Route::get('novel', function (){
        return view('novel');
    });
    Route::get('video', function (){
        return view('video');
    });
    // Novel_Link
    //battov
        Route::get('novel/nvbattov', function (){
            return view('novel/nvbattov');
        });
        Route::get('sok2', function (){
            return view('episode/battov/sok2');
        });
        Route::get('sok3', function (){
            return view('episode/battov/sok3');
        });
        Route::get('sok4', function (){
            return view('episode/battov/sok4');
        });
        Route::get('sok5', function (){
            return view('episode/battov/sok5');
        });
        Route::get('sok6', function (){
            return view('episode/battov/sok6');
        });
    //puhoun
        Route::get('novel/puhoun', function (){
            return view('novel/puhoun');
        });
        Route::get('puhoun1', function (){
            return view('episode/puhoun/puh1');
        });
});

