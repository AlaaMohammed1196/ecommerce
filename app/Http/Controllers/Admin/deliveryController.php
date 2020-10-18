<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Model\Delivery;
class deliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries=Delivery::all();
        return view('admin.delivey.index' ,compact('deliveries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.delivey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request , [

            'username' =>'required|string',
            'email' =>'required|email|unique:deliveries',
            'password'=>'required',
            ]);
    $data['password']=Hash::make($data['password']);
     Delivery::create($data);
     return redirect('admin/delivery')->with('alert' ,'تم أضافه بيانات المندوب بنجاح');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $delivery=Delivery::findorfail($id);
         return view('admin.delivey.edit' ,compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data=$this->validate($request , [

            'username' =>'required|string',
            'email' =>'required|email|unique:deliveries,email,'.$id,
            'password'=>'required',
            ]);
    $data['password']=Hash::make($data['password']);
     Delivery::where('id',$id)->update($data);
     return redirect('admin/delivery')->with('alert' ,'تم تعديل بيانات المندوب بنجاح');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Delivery::where('id',$id)->delete();
     return redirect('admin/delivery')->with('alert' ,'تم حذف بيانات المندوب بنجاح'); 
    }
}
