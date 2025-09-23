<?php

use App\Http\Controllers\visitorController;
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

Route::get('/', [visitorController::class, 'viewList'])->name('index');
Route::get('/indexData', [visitorController::class, 'getData'])->name('indexData'); // Get Data
Route::post('/saveData', [visitorController::class, 'insertData'])->name('saveData'); // Insert Data

Route::get('/detailData/{id}', [visitorController::class, 'getDetailData'])->name(''); // LIST DETAIL
Route::post('/saveEdit/{id}', [visitorController::class, 'saveChangesData'])->name('saveEdit'); // LIST DETAIL
Route::delete('/deleteData/{id}', [visitorController::class, 'deleteData'])->name('deleteData');

Route::post('/check-duplicate', [visitorController::class, 'checkDuplicate'])->name('checkDuplicate');

