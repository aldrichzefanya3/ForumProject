<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response;
use App\Register;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('RegisterController.index');
    }
    public function store(Request $request){
      
        $validator=Validator::make($input=$request->except('_token','REGISTER'),['username' => 'required|min:4|max:25',
                                    'email' => 'required|email|unique:registers',
                                    'phone' => 'required|numeric',
                                    'password'=>'required|min:8|max:20',
                                    'confirmpassword'=>'required|same:password',
                            
         ],['username.required' =>'Username field is required','password.min'=>"Password must be at least min 8 max 20 characters",'password.max'=>"Password must be at least min 8 max 20 characters",'confirmpassword.same'=>"Confirm password must be same as your password"]);
        
        if($validator->validate()){
            Register::formstore($input=$request->except('_token','confirmpassword'));  
            return redirect()->back()->with('msg','Registered Successfully');
        }
        else{
            return redirect()->route('signup');
        }
        
        
    }
    protected function guard()
    {
        return Auth::guard('web');
    }
    
   public function login(Request $request){
        $validator=Validator::make($input=$request->except('_token','LOGIN'),[
                                    'email' => 'required|email',
                                    
                                    'password'=>'required'],['email.required'=>"Invalid E-Mail Address",'password.required'=>"Invalid Password"]);
        if($validator->fails()){
            return redirect()->back()->with('msg','Login Failed');
        }else{
            $userdata=array('email'=>$request->get('email'),'password'=>$request->get('password'));
            if(Auth::attempt($userdata)){
                return Redirect::to('');
            }else{
                return redirect()->back()->with('msg','Login Failed');
                
            }
                
        }
    }
    
}


