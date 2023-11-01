<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\Doctor;

class homeController extends Controller
{
   public function index() {
    $majors =Major::select('id','title','image')->get();
    $doctors =Doctor::get();
        return view('front.pages.home.index',compact('majors'),compact('doctors'));
    }
}
