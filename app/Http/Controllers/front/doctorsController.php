<?php

namespace App\Http\Controllers\front;

use App\Models\Doctor;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\auth\bookingRequest;


class doctorsController extends Controller
{
    public function index() {
        $doctors =Doctor::select('id','name','image','bio','major_id')->paginate(8);

        return view('front.pages.doctors.index',compact('doctors'));
    }
    public function showBYmajor($major_id) {
        $doctors_major =Doctor::where('major_id',$major_id)->paginate(8);


        return view('front.pages.doctors.showBYmajor',compact('doctors_major'));
    }



    public function show($id){
        $doctor=Doctor::find($id);
        return view('front.pages.doctors.show',compact('doctor'));
    }
    public function submitBooking(bookingRequest $requset){
        $data=$requset->validated();
        Booking::create($data);
        return  redirect()->back();
    }
}
