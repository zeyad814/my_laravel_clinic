<?php

namespace App\Http\Controllers\admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bookingController extends Controller
{
    public function index(){
        $books =Booking::get();
        return view('admin.pages.booking.index',compact('books'));
    }
    public function submitdeletebook($id)
        {
        $book =Booking::findOrFail($id);
        $book->delete();
        toastr()->success('booking has been confirmed successfully');
        return redirect()->back();
        }

}
