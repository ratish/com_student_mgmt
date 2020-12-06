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
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('admin/dashboard');
});

Route::get('students', [StudentController::class, 'index']);
Route::get('students/create', [StudentController::class, 'create']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}/edit', [StudentController::class, 'edit']);
Route::put('students/{id}', [StudentController::class, 'update']);