<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ServiceController;

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
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/tax-calculator', [HomeController::class,'taxCalculator'])->name('tax-calculator');
Route::get('/ntn-status', [HomeController::class,'ntnStatus'])->name('ntn-status');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');

// Route::view('/', 'welcome')->name('home');
// Route::view('/tax-calculator', 'tax-calculator')->name('tax-calculator');
// Route::view('/ntn-status', 'ntn-status')->name('ntn-status');
// Route::view('/contact', 'contact')->name('contact');


Route::get('/services/income-tax', [ServiceController::class,'incomeTax'])->name('income-tax');
Route::get('/services/intellectual-property', [ServiceController::class,'intellectualProperty'])->name('intellectual-property');
Route::get('/services/company-registration', [ServiceController::class,'companyRegistration'])->name('company-registration');
Route::get('/services/sales-tax', [ServiceController::class,'salesTax'])->name('sales-tax');


//Mail
Route::post('contact-us', [MailController::class,'contactUs'])->name('contact-us');
Route::post('service-query', [MailController::class,'serviceQuery'])->name('service-query');


