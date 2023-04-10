<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\BotmanController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SslCommerzPaymentController;
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
    Route::get('/payment','payment')->name('payment');
    Route::get('/course','Course')->name('course');
    Route::post('/addcourse',[Admincontroller::class,'addcourse'])->name('addcourse');
    Route::post('/editcourse',[Admincontroller::class,'editcourse'])->name('editcourse');
    Route::post('/deletecourse',[Admincontroller::class,'deletecourse'])->name('deletecourse');
    Route::get('/course/content','CourseContent')->name('course.content');
    Route::get('/course',[Admincontroller::class,'coursenroll'])->name('course');   
});

require __DIR__.'/auth.php';
Route::get('/admin/dashboard', function () {

    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');
Route::middleware('auth:admin')->group(function () {
    Route::post('/addcourse',[Admincontroller::class,'addcourse'])->name('addcourse');
    
    Route::post('/editcourse',[Admincontroller::class,'editcourse'])->name('editcourse');
    Route::post('/deletecourse',[Admincontroller::class,'deletecourse'])->name('deletecourse');
    Route::get('/admin/courses',[Admincontroller::class,'subj'])->name('coursesdashboard');
    Route::get('/admin/test',[Admincontroller::class,'testdashboard'])->name('testdashboard');;
});
    
Route::controller(DemoController::class)->group(function () {
    Route::get('/admin/logout','explore')->name('admin.logout');
    Route::get('/admin/profile','AdminProfile')->name('admin.profile');
    
});
Route::match(['get','post'],'/botman',[BotmanController::class,'handle']);

require __DIR__.'/adminauth.php';

Route::get('/payment', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);