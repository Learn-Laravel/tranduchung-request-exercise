<?php

use App\Http\Controllers\FormController;
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
Route::get('/index', [FormController::class,'index']);
Route::post('/post', [FormController::class, 'post']);
// Route::get('/forms', [FormController::class,'query']);
// Route::post('/post', [FormController::class, 'store']);

Route::get('/indexs', [FormController::class, 'indexs']);
Route::post('/uploadfile', [FormController::class, 'uploadFile']);