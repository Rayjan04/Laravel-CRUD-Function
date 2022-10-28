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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for display table data
Route::get('/home', [App\Http\Controllers\UserController::class, 'Displaydata']);

// Route for Create 
Route::post('Create', [App\Http\Controllers\UserController::class, 'Create']);

//Route for Delete
Route::get('Delete/{id}', [App\Http\Controllers\UserController::class, 'Delete']);

//route for Edit 
Route::get('Edit/{id}', [App\Http\Controllers\UserController::class, 'DisplayEdit']);
Route::post('Update', [App\Http\Controllers\UserController::class, 'Update']);