<?php

use App\Http\Controllers\MailController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('home');
Route::view('/tax-calculator', 'tax-calculator')->name('tax-calculator');
Route::view('/ntn-status', 'ntn-status')->name('ntn-status');
Route::view('/contact', 'contact')->name('contact');

Route::view('/services/income-tax', 'services/income-tax')->name('income-tax');
Route::view('/services/intellectual-property', 'services/intellectual-property')->name('intellectual-property');
Route::view('/services/company-registration', 'services/company-registration')->name('company-registration');
Route::view('/services/sales-tax', 'services/sales-tax')->name('sales-tax');


//Mail
Route::post('contact-us', [MailController::class,'contactUs'])->name('contact-us');


