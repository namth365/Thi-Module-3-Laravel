<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ManageController;
use App\Http\Controllers\Admin\EmployeeController;
use Illuminate\Http\Request;
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
Route::group(['prefix' => 'admin'], function () {
    Route::resource('manages',ManageController::class);
    Route::resource('employees',EmployeeController::class);
    Route::get('search', [EmployeeController::class,'search'])->name('employees.search');
});