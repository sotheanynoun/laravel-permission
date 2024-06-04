<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;

Route::redirect('/', '/login');

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['role:management']], function () {
    Route::get('/management/index', function () {
        return view('management.index');
    });
});
Route::group(['middleware' => ['role:provincial']], function () {
    Route::get('/provincial/index', function () {
        return view('provincial.index');
    });
});
Route::group(['middleware' => ['role:city hall']], function () {
    Route::get('/city_hall/index', function () {
        return view('city_hall.index');
    });
});
Route::group(['middleware' => ['role:local author']], function () {
    Route::get('/local_author/index', function () {
        return view('local_author.index');
    });
});