<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Admission;
use App\Model\Facility;
use App\Model\LatestNotice;
use App\Model\Logo;
use App\Model\Mission;
use App\Model\PrincipalMessage;
use App\Model\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){
        $data['about_school']=Mission::first();
        $data['principal_message']=PrincipalMessage::first();
       $data['logo']=Logo::first();
        $data['sliders']=Slider::all();
        $data['facilities']=Facility::all();
        return view('frontend.layouts.home',$data);
    }

    public function objective(){

        return view('frontend.pages.objective');
    }
    public function admission(){
        $data['allData']=Admission::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.admission',$data);
    }

    public function teacherinfo(){
        $data['logo']=Logo::first();
        return view('frontend.pages.teacher_info',$data);
    }
    public function notice(){

        return view('frontend.pages.notice');
    }

    public function Latestnotice(){
        $data['logo']=Logo::first();
        $data['allData']=LatestNotice::all();

        return view('frontend.pages.latest-notice',$data);
    }
    public function DetailAboutus(){
        $data['logo']=Logo::first();
        return view('frontend.pages.details-aboutus',$data);
    }

    public function contact(){

        return view('frontend.pages.contact');
    }
}
