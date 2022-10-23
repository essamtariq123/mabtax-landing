<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    public function index() {
        SEOMeta::setTitle('MabTax');

        $services = SubService::where('is_featured', true)->with('service')->get();

        return view('welcome', compact('services'));
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

    public function services() {

        $services  = Service::all();

        SEOMeta::setTitle('Services');
        return view('services.main', compact('services'));
    }
}
