<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\classesController;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\HomeworksController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\routinesController;
use App\Http\Controllers\AssignmentsController;
use App\Http\Controllers\askMeController;


use App\Http\Controllers\student\SclassesController;

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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [TeacherController::class, 'TeacherDashboard'])->name('dashboard');
Route::get('/std/dashboard', [TeacherController::class, 'Dashboard'])->name('stdashboard');

Route::resource('/class', classesController::class);
Route::resource('/attendance', attendancesController::class);
Route::resource('/homework', HomeworksController::class);
Route::resource('/test', TestsController::class);
Route::resource('/student', StudentsController::class);
Route::resource('/routine', routinesController::class);
Route::resource('/assignment', AssignmentsController::class);
Route::resource('/askme', askMeController::class);

// Students Routes
Route::resource('/sclass', SclassesController::class);
});

Route::resource('/teacher', TeachersController::class)->middleware('auth');

// Route::get('/std/dashboard', function(){
//     return view('dashboard')->name('stdashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
