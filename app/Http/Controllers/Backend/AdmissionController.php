<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmissionController extends Controller
{
    public function view(){

        $data['allData']=Admission::all();


        return view ('backend.admission.view-admission', $data);


    }

    public function add(){

        return view('backend.admission.add-admission');

    }

    public function store(Request $request){

        $data =new Admission();
        $data->class=$request->class;
        $data->admission_fee = $request->admission_fee;
        $data->session_fee = $request->session_fee;
        $data->salary = $request->salary;
        $data->half_yearly_fee = $request->half_yearly_fee;
        $data->middle_fee = $request->middle_fee;
        $data->created_by=Auth::user()->id;
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('admissions.view');
    }

    public function edit($id){

        $editData=LatestNotice::find($id);
        return view('backend.latest_notice.edit-latest-notice',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =LatestNotice::find($id);
        $data->title=$request->title;
        $data->post_date = $request->post_date;
        $data->end_date = $request->end_date;
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
    public function delete($id){

        $slider=LatestNotice::find($id);

        if(file_exists('public/backend/image/' .$slider->image)AND !empty($slider->image)){
            unlink('public/backend/image/' .$slider->image);
        }
        $slider->delete();
        return redirect()->route('latest_notice.view')->with('success', 'Data Deleted successfully');
    }

}
