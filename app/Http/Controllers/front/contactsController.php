<?php

namespace App\Http\Controllers\front;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactsController extends Controller
{
    public function index(){
        return view('front.pages.contacts.index');
    }
    public function submitContact(Request $request){
       $data=$request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'message'=>'required|min:3',
       ]);
      if(Contact::create($data)){
        return redirect()->route('home');
      };

    }
}
