<?php

// use App\Http\Controllers\HelloController;
// use App\Http\Controllers\HomepageController;

use App\Http\Controllers\HomepageController;
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

// =======================================================
// langsung ke view
// =======================================================
// Route::get('homepage', function(){
//     $data = [
//         'appName' => 'hello world',
//         'appTitle'=> 'homepage'
//     ];
//     // return view('home', $data);
//     return view('home', compact('data'));
// });


// =======================================================
// menggunakan controller
// =======================================================

// Route::get('homepage', [HomepageController::class, 'index']);

Route::controller(HomepageController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('article', 'article');
    Route::get('about', 'about');
    Route::get('service', 'service');
    Route::get('contact', 'contact');
});


// Route::group(['prefx' => 'homepage'], function(){
//     Route::get('/', [HomepageController::class, 'index']);
//     Route::get('article', [HomepageController::class, 'article']);
//     Route::get('about', [HomepageController::class, 'about']);
//     Route::get('service', [HomepageController::class, 'service']);
//     Route::get('contact', [HomepageController::class, 'contact']);
//     Route::get('member', [HomepageController::class, 'member']);
// });