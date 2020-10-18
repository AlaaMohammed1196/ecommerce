<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class vendorcontroller extends Controller
{
    public function login(){

       return view('vendor.layouts.login');
    }
 
   public function doLogin(Request $request){
            

            $data=$this->validate($request ,[
            	'email'=>'required|email',
            	'password'=>'required'

            	],[
                   'email.required'=>'يجب تمرير البريد الالكتروني',
                     'password.required'=>'يجب تمرير كلمه المرور'
            	]);
    	if(auth()->guard('vendor')->attempt(['email'=>$data['email'] ,'password'=>$data['password']])){

    		return redirect('vendor/product');
    	}
    	else{
    		return redirect()->back()->with('alert' ,'تحقق من كلمه المرور و البريد الالكتروني');
    	}
    }

     public function Logout(){
          auth()->guard('vendor')->logout();
          return redirect('vendor/login');
    }

}
