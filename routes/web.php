<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('about', function(){
    return view('about');
});
route::get('project', function(){
    return view('project');
});
route::get('contact', function(){
    return view('contact');
});
route::post('contact', [ContactController::class, 'kirimemail']);