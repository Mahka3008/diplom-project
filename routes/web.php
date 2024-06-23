<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [IndexController::class, "index"]);


// Route::get('/verstka', function () {
//     return view('verstka');
// });

Route::get('about', [IndexController::class, "about"]);

Route::get('project', [IndexController::class, "project"]);

Route::get('customers', [IndexController::class, "customers"]);

Route::get('services', [IndexController::class, "services"]);

Route::get('contacts', [IndexController::class, "contacts"]);

Route::get('calculator', [IndexController::class, "calculator"]);

Route::get('regist', [IndexController::class, 'showRegistForm']);

Route::post('regist', [IndexController::class, 'regist']);

Auth::routes();

Route::post('submit', [IndexController::class, "createApplea"]);

Route::get('admin', [IndexController::class, "admin"])->middleware("authUser");

Route::get('admin-login', [IndexController::class, "adminLogin"]);

Route::get('accept-apple/{appeal}', [IndexController::class, "acceptApple"]);



