<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;
use Mail; 
class vendorController extends Controller
{ 
    public function index(){
    	$vendors=Vendor::all();
    	
    	return view('admin.vendor.index',compact('vendors'));
    }
    
    public function edit($id){
    		$vendor=Vendor::findorfail($id);
    
    	return view('admin.vendor.edit' ,compact('vendor'));
    }
    public function update(Request $request ,$id){

        $data=$this->validate($request,[
        	'username'=>'required|string',
            'email'=>'required|email',
            'phone' =>'required|string',
           'numer_merhant' =>'required|string',
            'status'=>'required|string'
            ]);
       
        if($data['status'] ==1){
        
        	Mail::to($data['email'])->send(new \App\Mail\sendNotifucaion($data));
        }
        Vendor::where('id',$id)->update($data);
        return redirect('admin/vendors')->with('alert' ,'تم تعديل البيانات  بنجاح');

    }
}
