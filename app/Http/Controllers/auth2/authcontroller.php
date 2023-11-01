<?php

namespace App\Http\Controllers\auth2;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\auth\RegisterRequest;

class authcontroller extends Controller
{

    public function login() {
        return view('login.index');

    }
    public function register(){
        return view('register.index');
    }
    public function submitRegister(RegisterRequest $request){
        $data=$request->validated();
        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
        $img=time().rand(100,200).'.'. $ext ;
        $file=$image->move(public_path('upload/users'),$img);
        $data['image']=$img;
        User::create($data);
        return redirect()->route('login');

    }
    public function submitLogin(Request $request)
      {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','string'],
        ]);
        // $guards = array_slice(config('auth.guards'),0,-1);
        // dd($guards);
        // foreach($guards as $gaurd => $value){
            if(auth::guard('web')->attempt($credentials))
                {
                 return redirect()->route('front.pages.home');
                }
                elseif(auth::attempt($credentials))
                {
                 return redirect()->route('admin.pages.home');
                }
            return back()->withErrors([
            'password' => 'The provided credentials do not match our records.',
        ]);


         }



    public function logout(){
        Auth::logout();
        return redirect()->route('front.pages.home');
    }

}
  //    $validator= $this->validateLogin($request->all());
        //    $validator->validated();
        // if(Auth::attempt([$validator->validated()])){
        //     return redirect()->route('front.pages.home');
        // };

        // }
        //  function validateLogin($data)
        //  {
        //     return validator::make($data, [
        //         'email' => ['required','email'],
        //         'password' => ['required','min:5']

        //     ]);
