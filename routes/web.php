<?php

use App\Http\Controllers\Employee;
use App\Http\Controllers\LaravelController;
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

// Route::get('/', function () { return view('welcome');  } );
//Route::get('About',[App\http\Controllers\LaravelController::class,'About'])->name('About');
// Route::get('/About',[LaravelController::class,'About']);
// Route::get('/Fetch',[LaravelController::class,'Fetch']);
// Route::get('/Register', function () { return view('Registration');  } );
Route::get('/',[Employee::class,'list']);
Route::get('add',[Employee::class,'add']);
Route::post('add',[Employee::class,'add']);

Route::get('edit/{id}', [Employee::class,'edit']);
Route::post('update', [Employee::class,'update']);
Route::get('delete/{id}', [Employee::class,'delete'])->name('delete.row');