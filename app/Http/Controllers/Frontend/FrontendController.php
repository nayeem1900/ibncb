<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\LatestNotice;
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

    public function teacherinfo(){

        return view('frontend.pages.teacher_info');
    }
    public function notice(){

        return view('frontend.pages.notice');
    }

    public function Latestnotice(){
        $data['allData']=LatestNotice::all();

        return view('frontend.pages.latest-notice',$data);
    }
    public function DetailAboutus(){

        return view('frontend.pages.details-aboutus');
    }

    public function contact(){

        return view('frontend.pages.contact');
    }
}
