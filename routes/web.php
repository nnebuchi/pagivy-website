<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services']);
Route::get('/services/{agency}', [PagesController::class, 'agency'])->name('agency-detail');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact-page');

Route::post('/submit-application', [AgencyController::class, 'createApplication'])->name('submit-application');
Route::get('/get-user', [UserController::class, 'getUser'])->name('get-user');

Route::get('/verify-paystack-pay', [PaymentController::class, 'verifyPay'])->name('verify-paystack-pay');
