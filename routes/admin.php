<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\MyClassController;

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

// faculty
Route::get('/addfaculty', [FacultyController::class, 'create']);
Route::post('/addfacultydata', [FacultyController::class, 'store']);
Route::get('/showfaculty', [FacultyController::class, 'show']);
Route::get('/showfacultydata', [FacultyController::class, 'show'])->name('showme');
Route::get('/edit/{id}', [FacultyController::class, 'edit']);
Route::patch('/update/{id}', [FacultyController::class, 'update']);
Route::match(['get', 'post'],'/delete/{id}', [FacultyController::class, 'destroy']);

// Route::view('/editfaculty','admin.editfaculty');

//student
Route::get('/addstudent', [StudentController::class, 'create']);
Route::post('/addstudentdata', [StudentController::class, 'store']);
Route::get('/showstudent', [StudentController::class, 'show']);
Route::get('/showstudentdata', [StudentController::class, 'show'])->name('showmee');
Route::get('/editt/{id}', [StudentController::class, 'edit']);
 Route::patch('/updatee/{id}', [StudentController::class, 'update']);
 Route::match(['get', 'post'],'/deletee/{id}', [StudentController::class, 'destroy']);



//subject
Route::get('/addsubject', [SubjectController::class, 'create']);
Route::post('/addsubjectdata', [SubjectController::class, 'store']);