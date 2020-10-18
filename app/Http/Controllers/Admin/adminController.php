<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Admin;
class adminController extends Controller
{
    

    public function login(){

       return view('admin.layouts.login');
    }

   public function doLogin(Request $request){
            

            $data=$this->validate($request ,[
            	'email'=>'required|email',
            	'password'=>'required'

            	],[
                   'email.required'=>'يجب تمرير البريد الالكتروني',
                     'password.required'=>'يجب تمرير كلمه المرور'
            	]);
    	if(auth()->guard('admin')->attempt(['email'=>$data['email'] ,'password'=>$data['password']])){

    		return redirect('admin/setting');
    	}
    	else{
    		return redirect()->back()->with('alert' ,'تحقق من كلمه المرور و البريد الالكتروني');
    	}
    }

 public function create(){

        return view('admin.manger.create');
     }
     public function index(){
        $admins=Admin::all();
       return view('admin.manger.index',compact('admins'));
     }
     public function edit($id){
        $admin=Admin::findorfail($id);
        return view('admin.manger.edit' ,compact('admin'));

     }

     public function update (Request $request ,$id){
       
        $data=$this->validate($request ,[
              'username'=>'required|string',
              'email'=>'required|email|unique:admins,email,'.$id,
              'password'=>'required|string',
            ],[
            'username.required'=>'يحب تمرير أسم المستخد م',
              'email.required'=>'يحب تمرير البريد الألكتروني',
                'email.unique'=>'البريد الاكتروني موجود بالفعل',
                  'password.required'=>'يحب تمرير كلمه المرور ',

            ]);

        $data['password']=Hash::make($data['password']);
        Admin::where('id' ,$id)->update($data);
        return redirect('admin/admin')->with('alert' ,'تم تعديل بيانات المشرف');
     }
     public function store(Request $request){


        $data=$this->validate($request ,[
              'username'=>'required|string',
              'email'=>'required|email|unique:admins',
              'password'=>'required|string',
            ],[
            'username.required'=>'يحب تمرير أسم المستخد م',
              'email.required'=>'يحب تمرير البريد الألكتروني',
                'email.unique'=>'البريد الاكتروني موجود بالفعل',
                  'password.required'=>'يحب تمرير كلمه المرور ',

            ]);

        $data['password']=Hash::make($data['password']);
        Admin::create($data);
        return redirect('admin/admin')->with('alert' ,'تم حفظ بيانات المشرف');
     }
     public function delete($id){
 Admin::where('id' ,$id)->delete();
  return redirect('admin/admin')->with('alert' ,'تم حذف المشرف');

}


     public function Logout(){
          auth()->guard('admin')->logout();
          return redirect('admin/login');
    }

}
