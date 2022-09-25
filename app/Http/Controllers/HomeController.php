<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function index() {
        SEOMeta::setTitle('MabTax');
        return view('welcome');
    }
    
    public function taxCalculator() {
        SEOMeta::setTitle('Tax Calculator');
        return view('tax-calculator');
    }

    public function ntnStatus() {
        SEOMeta::setTitle('NTN Status');
        return view('ntn-status');
    }

    public function contact() {
        SEOMeta::setTitle('Contact Us');
        return view('contact');
    }
}
