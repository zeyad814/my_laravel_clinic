<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;

class majorsController extends Controller
{
    public function index() {
         $majors =Major::select('id','title','image')->paginate();
        return view('front.pages.majors.index',compact('majors'));
    }
}
