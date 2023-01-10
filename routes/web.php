<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\URegionController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\UCountryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UJobController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UDepartmentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PagesController;

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
Route::get('/', [PagesController::class, 'home']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);
Route::get('/login', [PagesController::class, 'login']);
// Route::get('/', function () {
//     return view('home');
// });
Route::resource('udepartment', UDepartmentController::class);
Route::resource('ujob', UJobController::class);
Route::resource('ucountry', UCountryController::class);
Route::resource('uregion', URegionController::class);
Route::resource('department', DepartmentController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('job', JobController::class);
Route::resource('region', RegionController::class);
Route::resource('country', CountryController::class);
Route::resource('role', RoleController::class);
Route::resource('location', LocationController::class);
// Route::get('/country', [CountryController::class, 'index']);
//Route::resource('/', [HomeController::class, 'index']);