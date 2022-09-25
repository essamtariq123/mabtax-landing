<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class ServiceController extends Controller
{
    public function incomeTax() {
        $services  = Service::where('title', 'Income Tax Return')->with('sub_services', 'sub_services.requirements')->first();

        SEOMeta::setTitle($services->title);

        return view('services.index', compact('services'));
    }

    public function intellectualProperty() {
        $services  = Service::where('title', 'Intellectual Property')->with('sub_services', 'sub_services.requirements')->first();

        SEOMeta::setTitle($services->title);

        return view('services.index', compact('services'));
    }

    public function companyRegistration() {
        $services  = Service::where('title', "Company's Registration")->with('sub_services', 'sub_services.requirements')->first();

        SEOMeta::setTitle($services->title);

        return view('services.index', compact('services'));
    }

    public function salesTax() {
        $services  = Service::where('title', 'Sales Tax Registration')->with('sub_services', 'sub_services.requirements')->first();

        SEOMeta::setTitle($services->title);

        return view('services.index', compact('services'));
    }
}
