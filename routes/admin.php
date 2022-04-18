<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

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

Route::get('/admin', function () {
    return view('admin.adminmain');
});

// hello
Route::get('/addfaculty', [FacultyController::class, 'create']);
Route::post('/addfacultydata', [FacultyController::class, 'store']);


Route::get('/addstudent', [StudentController::class, 'create']);
Route::post('/addstudentdata', [StudentController::class, 'store']);


Route::get('/addsubject', [SubjectController::class, 'create']);
Route::post('/addsubjectdata', [SubjectController::class, 'store']);