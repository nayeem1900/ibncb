<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\LatestNotice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LatestNoticeController extends Controller
{
    public function view(){

        $data['allData']=LatestNotice::all();


        return view ('backend.latest_notice.view-latest-notice', $data);


    }

    public function add(){

        return view('backend.latest_notice.add-latest-notice');

    }

    public function store(Request $request){

        $data =new LatestNotice();
        $data->title=$request->title;
        $data->post_date = $request->post_date;
        $data->created_by=Auth::user()->id;
        if ($request->file('lnotice_download')) {

            $file = $request->file('lnotice_download');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/notice_images'), $filename);
            $data['lnotice_download'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('latest_notice.view');
    }

    public function edit($id){

        $editData=Slider::find($id);
        return view('backend.slider.edit-slider',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =Slider::find($id);
        $data->short_title=$request->short_title;
        $data->long_title=$request->long_title;
        $data->updated_by=Auth::user()->id;

        if ($request->file('image')) {

            $file = $request->file('image');
            @unlink(public_path('backend/image/' . $data->image));

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('backend/image'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        session()->flash('success',' slider update success');
        return redirect()->route('sliders.view');


    }
    public function delete($id){

        $slider=Slider::find($id);

        if(file_exists('public/backend/image/' .$slider->image)AND !empty($slider->image)){
            unlink('public/backend/image/' .$slider->image);
        }
        $slider->delete();
        return redirect()->route('sliders.view')->with('success', 'Data Deleted successfully');
    }

}
