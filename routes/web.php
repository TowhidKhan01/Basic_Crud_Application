<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UniversityController;
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
// student route
Route::get('/',[StudentController::class,'index'])->name('index');

// Route::get('view',[StudentController::class,'view'])->name('view');
Route::get('create', [StudentController::class, 'create'])->name('create');
Route::post('store', [StudentController::class, 'store'])->name('store');
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('update/{id}', [StudentController::class, 'update'])->name('update');
Route::get('delete/{id}', [StudentController::class, 'destroy'])->name('delete');
Route::get('show/{id}', [StudentController::class, 'show'])->name('show');

// University Routes

Route::get('/viewUniversity',[UniversityController::class,'viewUniversity'])->name('viewUniversity');
Route::get('/addUniversity', [UniversityController::class, 'addUniversity'])->name('addUniversity');
Route::post('/storeUniversity', [UniversityController::class, 'storeUniversity'])->name('storeUniversity');



Route::get('edit/{id}', [UniversityController::class, 'edit'])->name('edit');
Route::post('update/{id}', [UniversityController::class, 'update'])->name('update');
Route::get('delete/{id}', [UniversityController::class, 'destroy'])->name('delete');
Route::get('show/{id}', [UniversityController::class, 'show'])->name('show');