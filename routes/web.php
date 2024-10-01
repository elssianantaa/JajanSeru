<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\landingPageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AdminController::class, 'login']);
Route::post('/auth', [AdminController::class, 'authentication']);
Route::get('/logout', [AdminController::class, 'logout']);


Route::get('/', [landingPageController::class, 'show']);
Route::middleware('StatusLogin')->group(function(){
    Route::get('/dasboard', [FoodController::class, 'showDb']);
    Route::get('/food', [FoodController::class, 'show']);
    Route::post('/food', [FoodController::class, 'search']);
    Route::get('/food/create', [FoodController::class, 'create']);
    Route::post('/food/create', [FoodController::class, 'add']);
    Route::get('/food/edit/{id}', [FoodController::class, 'edit']);
    Route::post('/food/update/{id}', [FoodController::class, 'update']);
    Route::get('food/delete/{id}', [FoodController::class, 'delete']);
    
    Route::get('/user', [AdminController::class, 'show']);
    Route::post('/user', [AdminController::class, 'search']);
    Route::get('/user/create', [AdminController::class, 'create']);
    Route::post('/user/create', [AdminController::class, 'add']);
    Route::get('/user/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/user/update/{id}', [AdminController::class, 'update']);
    Route::get('/user/delete/{id}', [AdminController::class, 'delete']);
});

Route::get('/allFood', [FoodController::class, 'showall']);
Route::post('/allFood', [FoodController::class, 'searchAll']);
Route::get('/landingPage', [FoodController::class, 'foodshow']);
Route::get('/noodles', [FoodController::class, 'noodlesshow']);
Route::post('/noodles', [FoodController::class, 'ndSearch']);
Route::get('/sbFood', [FoodController::class, 'sbShow']);
Route::post('/sbFood', [FoodController::class, 'sbSearch']);
Route::get('/mochi', [FoodController::class, 'mcShow']);
Route::post('/mochi', [FoodController::class, 'mcSearch']);
Route::get('/smoothie', [FoodController::class, 'smShow']);
Route::post('/smoothie', [FoodController::class, 'smSearch']);
Route::get('/dimsum', [FoodController::class, 'dsShow']);
Route::post('/dimsum', [FoodController::class, 'dsSearch']);

Route::get('/detail/{id}', [FoodController::class, 'showDetail'])->name('detail');