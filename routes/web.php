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
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('admin/dashboard');
});

Route::get('students', [StudentController::class, 'index']);
Route::get('students/create', [StudentController::class, 'create']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}/edit', [StudentController::class, 'edit']);
Route::put('students/{id}', [StudentController::class, 'update']);

Route::get('courses', [CourseController::class, 'index']);
Route::get('courses/create', [CourseController::class, 'create']);
Route::post('courses', [CourseController::class, 'store']);
Route::get('courses/{id}/edit', [CourseController::class, 'edit']);
Route::put('courses/{id}', [CourseController::class, 'update']);

Route::get('enrollments/{course_id}', [EnrollmentController::class, 'index']);
Route::get('enrollments/{course_id}/create', [EnrollmentController::class, 'create']);
Route::post('enrollments/{course_id}/store', [EnrollmentController::class, 'store']);
Route::delete('enrollments/{course_id}/unenroll/{student_id}', [EnrollmentController::class, 'destroy']);