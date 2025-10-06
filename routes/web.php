<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\weatherController;
use App\Http\Controllers\truthOrDrinkController;
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


// FIRST ROUTE TO BE OPEN
Route::get('/', function () {
    return redirect('student/list');
});


Route::get('student/list', [studentController::class, 'viewList'])->name('');
Route::get('student/getData', [studentController::class, 'getData'])->name('list'); // Get Data
Route::get('student/detailData/{id}', [studentController::class, 'getDetailData'])->name(''); // LIST DETAIL
Route::post('student/saveData', [studentController::class, 'insertData'])->name(''); // Insert Data
Route::post('student/saveEdit/{id}', [studentController::class, 'saveChangesData'])->name(''); // LIST DETAIL
Route::delete('student/deleteData/{id}', [studentController::class, 'deleteData'])->name('');

Route::get('/student/create-nim', [StudentController::class, 'createNim'])->name('student.createNim');
Route::post('/check-duplicate', [studentController::class, 'checkDuplicate'])->name('check.duplicate');


// WEATHER
Route::get('/weather', [weatherController::class, 'index'])->name('weather.index');

// Drinking Game
Route::get('/games/truth-or-drink', [truthOrDrinkController::class, 'viewList'])->name('');
