<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Mascitra Normal Pages
Route::get("/", [HomeController::class, "index"])->name("index");
Route::get("/service", [HomeController::class, "service"])->name("service");
Route::get("/service/{id}", [HomeController::class, "serviceshow"])->name("serviceshow");
Route::post("/order", [HomeController::class, "order"])->name('order');

// Mascitra Dashboard Admin
Route::get("/dashboard", [AdminController::class, "dashboard"])->name('dashboard');
Route::get("/dashboard/user", [AdminController::class, "user"])->name('user');
Route::get("/dashboard/admin", [AdminController::class, "admin"])->name('admin');
Route::get("/dashboard/order", [AdminController::class, "order"]);
Route::get("/dashboard/order/show/{id}", [AdminController::class, "ordershow"]);
Route::get("/dashboard/service", [AdminController::class, "service"]);
Route::post("/dashboard/service/add", [AdminController::class, "addservice"])->name("addservice");
Route::get("/dashboard/service/{id}/edit", [AdminController::class, "editservice"])->name("editservice");
Route::post("/dashboard/service/{id}/update", [AdminController::class, "updateservice"])->name("updateservice");
Route::get('dashboard/service/{id}/delete', [AdminController::class, 'deleteservice'])->name('deleteservice');
Route::delete('dashboard/service/{id}/destroy', [AdminController::class, 'destroyservice'])->name('destroyservice');

// API
Route::get('/dashboard/user/api', [AdminController::class, "userapi"])->name('userapi');
Route::get('/dashboard/admin/api', [AdminController::class, "adminapi"])->name('adminapi');
Route::get('/dashboard/order/api', [AdminController::class, "orderapi"])->name('orderapi');
Route::get('/dashboard/service/api', [AdminController::class, "serviceapi"])->name('serviceapi');

// Authorization
Route::get('/login', [LoginController::class, "login"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, "processlogin"])->name("processlogin")->middleware('guest');
Route::get('/logout', [LoginController::class, "logout"])->name('logout')->middleware('auth');
Route::get('/register', [RegisterController::class, "register"])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, "processregister"])->name("processregister")->middleware('guest');