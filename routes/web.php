<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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