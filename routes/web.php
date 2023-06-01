<?php

declare(strict_types=1);

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
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


// Admin
Route::group(['prefix' => 'admin'], static function() {
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

// Guest's routes

Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');


