<?php

namespace App\Http\Controllers\admin;

use App\Models\Major;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admin_majorsController extends Controller
{
    public function index(){
        $majors=Major::get();
        return view('admin.pages.majors.index',compact('majors'));
    }
    public function addmajor(){
        return view('admin.pages.majors.addmajor');
    }
    public function submitmajor(request $request){
        $data=$request->validate([
            'title' =>'required',
            'image' =>'required|mimes:png,jpg,jpeg,gif'
        ]);
        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
        $img=time().rand(100,200).'.'. $ext ;
        $data['image']=$img;
        $move=$image->move(public_path('front/assets/images'),$img);
        Major::create($data);
        return redirect()->route('admin.pages.majors');
    }

}
