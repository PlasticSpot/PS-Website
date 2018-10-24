<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.home');
    }

    public function getVision() {
        return view('front.vision');
    }

    public function getLocation($location) {
        $locationPath = 'front.locations.' . $location;

        if(view()->exists($locationPath)){
            return view($locationPath)->render();
        }

        return view('front.404');
    }

    public function getTerms() {
        return view('front.terms');
    }

    public function getPrivacy() {
        return view('front.privacy');
    }
}
