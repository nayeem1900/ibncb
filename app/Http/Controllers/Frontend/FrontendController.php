<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){

        return view('frontend.layouts.home');
    }

    public function objective(){

        return view('frontend.pages.objective');
    }
    public function admission(){

        return view('frontend.pages.admission');
    }
    public function contact(){

        return view('frontend.pages.contact');
    }
}
