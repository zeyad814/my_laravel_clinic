<?php

namespace App\Http\Controllers\admin;

use App\Models\Major;
use App\Models\Doctor;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admin_homeController extends Controller
{
    public function index(){
        $doctors=Doctor::count();
        $majors=Major::count();
        $booking=Booking::count();
        return view('admin.pages.home.index',compact('majors','booking','doctors'));
    }

}
