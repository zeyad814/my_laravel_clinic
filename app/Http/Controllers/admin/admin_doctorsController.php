<?php

namespace App\Http\Controllers\admin;

use toastr;
use App\Models\Major;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Enum;

class admin_doctorsController extends Controller
{
    public function index(){
        $doctors=Doctor::get();
        // toastr()->success('Data has been saved successfully!');
        return view('admin.pages.doctors.index',compact('doctors'));
    }

    public function adddoctor(){
        $genders = Doctor::select('gender');
        $majors=Major::get();
        return view('admin.pages.doctors.adddoctor',compact('majors','genders'));
    }
    public function submitadddoctor(request $request)
    {
       $data= $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'password'=>'required|max:25|min:5',
            'bio'=>'required',
            'major_id'=>'required',
            'gender'=>['required'],
          'image' =>  ['required','image','mimes:png,jpg'],
        ]);
        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
        $img=time().'.'.$ext;
        $image->move(public_path('front/assets/images'), $img);
        $data['image']=$img;
        Doctor::create($data);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('admin.pages.doctors');
    }
    public function editdoctor($id)
    {
        $majors=Major::get();
        $doctor=Doctor::find($id);
        return view('admin.pages.doctors.editdoctor',compact('doctor','majors'));
    }
    public function submiteditdoctor(request $request, $id)
    {
        $data= $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'email'=>'required|email',
            'password'=>'required|max:25|min:5',
            'bio'=>'required',
          'major_id'=>'required',
          'image' =>  ['required','image','mimes:png,jpg'],
        ]);
        $doctor=Doctor::findOrFail($id);
        if (isset($data['image'])) {
            if (file_exists(public_path('front/assets/images/' . $doctor->image))) {
                unlink(public_path('front/assets/images/' . $doctor->image));
            }
        }
        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
        $img=time().'.'.$ext;
        $image->move(public_path('front/assets/images'), $img);
        $data['image']=$img;
        $doctor->update($data);
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('admin.pages.doctors');
    }
    public function destroy($id)
    {
        $product = Doctor::findOrFail($id);
        $product->delete();
        toastr()->success('Data has been deleted successfully!');
        return back();
    }
}
