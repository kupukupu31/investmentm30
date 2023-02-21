<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Home\TestingController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Home\HomeSliderController;

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
    return view('frontend.index');
});

//Show Login Page - edit later
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', [IndexController::class, 'Index']);

//User Role
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard'); //user dashboard
 
});

Route::controller(TransactionController::class)->name('addmoney')->group(function(){
    Route::get('/user/addmoney', 'create'); //Addmoney
    Route::post('/user/addmoney', 'store');
});

// Route::controller(TransactionController::class)->group(function () {
//     Route::get('user/transanctions', 'transanctions'); //transaction
    
// });
Route::get('user/transanctions', [TransactionController::class, 'transanctions'])->name('transanctions');
//Admin Role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});





//adminroute
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

// Home Slide All Route 
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
