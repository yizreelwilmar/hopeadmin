<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudAjaxController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DoahariiniController;
use App\Http\Controllers\CalendarTalentController;
use App\Http\Controllers\LandingformdoaController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\PermintaanViewController;
use Carbon\Carbon;

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

Route::get('/home', function () {
    return view('permintaandoa');
});
// Route::get('/Formdoa', function () {
//     return view('permintaandoaform');
// });

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');

Route::post('/permintaandoaform/store', [PermintaanController::class, 'store'])->name('permintaan.store');




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/Formdoa', [App\Http\Controllers\PermintaanController::class, 'index'])->name('formdoa');



Route::group(['middleware' =>['auth', 'ceklevel:user']], function(){

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/doahariini', [App\Http\Controllers\DoahariiniController::class, 'index'])->name('doahariini');
    Route::get('/calendartalent', [App\Http\Controllers\CalendarTalentController::class, 'index'])->name('calendartalent');


});

Route::group(['middleware' =>['auth', 'ceklevel:guest']], function(){

    Route::get('/guest', [App\Http\Controllers\HomeController::class, 'guest'])->name('guest');
    


});
    
    


Route::group(['middleware' =>['auth', 'ceklevel:admin']], function(){

    Route::get('/dashboard/crud', [CrudController::class, 'index'])->name('crud');
    Route::get('/dashboard/permintaancrud', [PermintaanViewController::class, 'index'])->name('permintaancrud');
    Route::post('/dashboard/permintaancrud/store', [PermintaanViewController::class, 'store'])->name('permintaancrud_tambah');
    Route::delete('/dashboard/permintaancrud/{id}/destroy', [PermintaanViewController::class, 'destroy']);
    Route::post('/dashboard/crud/store', [CrudController::class, 'store'])->name('crud_tambah');
    Route::post('/dashboard/crud/{id}/update', [CrudController::class, 'update']);
    Route::delete('/dashboard/crud/{id}/destroy', [CrudController::class, 'destroy']);
    Route::get('/dashboard/talent', [TalentController::class, 'index'])->name('talent');
    Route::post('/dashboard/talent/store', [TalentController::class, 'store'])->name('talent_tambah');
    Route::post('/dashboard/talent/{id}/update', [TalentController::class, 'update']);
    Route::delete('/dashboard/talent/{id}/destroy', [TalentController::class, 'destroy']);
  

});

Route::group(['middleware' =>['auth', 'ceklevel:superadmin']], function(){

    Route::get('/dashboard/user', [UserController::class, 'index'])->name('user');
    Route::post('/dashboard/user/store', [UserController::class, 'store'])->name('user_tambah');
    Route::post('/dashboard/user/{id}/update', [UserController::class, 'update']);
    Route::delete('/dashboard/user/{id}/destroy', [UserController::class, 'destroy']);
    Route::get('/user/cetak_pdf', [UserController::class, 'cetak_pdf']);

    

    
});


Auth::routes();

// Auth::routes(['verify' =>true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



