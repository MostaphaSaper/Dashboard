<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendServiceController extends Controller
{
    function advertising() {
        return view('website.services.advertising');
    }

    function finiancial_consulting() {
        return view('website.services.finiancial_consulting');
    }

    function human_consulting() {
        return view('website.services.human_consulting');
    }

    function legal_advice() {
        return view('website.services.legal_advice');
    }

    function marketing_consulting() {
        return view('website.services.marketing_consulting');
    }

    function marketing_services() {
        return view('website.services.marketing_services');
    }

    function technical_consulting() {
        return view('website.services.technical_consulting');
    }

}
