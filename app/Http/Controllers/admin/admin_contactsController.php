<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admin_contactsController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('admin.pages.contacts.index', compact('contacts'));
    }
    public function confirm_contact($id){
        $contacts = Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }
}
