<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\DemoController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(Admincontroller::class)->group(function () {
    Route::get('/logout','destroy')->name('logout');
    Route::get('/profile','Profile')->name('profile');
    Route::get('/settings','Settings')->name('settings');
    Route::get('/editprofile','editProfile')->name('editprofile');
    Route::post('/storeprofile','storeProfile')->name('storeprofile');
    Route::get('/quiz','Quiz')->name('quiz');
});

require __DIR__.'/auth.php';
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');

Route::controller(DemoController::class)->group(function () {
    Route::get('/admin/logout','explore')->name('admin.logout');
    Route::get('/admin/profile','AdminProfile')->name('admin.profile');
});


require __DIR__.'/adminauth.php';