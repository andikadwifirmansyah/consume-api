<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/siswa', [StudentController::class, 'index']); 
Route::get('/siswa/create', [StudentController::class, 'create']);
Route::post('/siswa/store', [StudentController::class, 'store']);
Route::get('/siswa/{id}', [StudentController::class, 'show']);
Route::get('/siswa/edit/{id}', [StudentController::class, 'edit']);
Route::patch('/siswa/update/{id}', [StudentController::class, 'update']);
Route::delete('/siswa/delete/{id}', [StudentController::class, 'destroy']);