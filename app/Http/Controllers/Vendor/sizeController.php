<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Model\Size;
class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sizes= Size::where('vendor_id',auth()->guard('vendor')->user()->id)->get();
       return view('vendor.size.index' ,compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('vendor.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request ,[
            'size'=>'required|string'
            ]);
        $data['vendor_id']=auth()->guard('vendor')->user()->id;
        Size::create($data);
        return redirect('vendor/size')->with('alert' ,'تم أضافه المقاس بنجاح');
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
         $size= Size::findorfail($id);
          return view('vendor.size.edit' ,compact('size'));
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
         $data=$this->validate($request ,[
            'size'=>'required|string'
            ]);
           $data['vendor_id']=auth()->guard('vendor')->user()->id;
        Size::where('id',$id)->update($data);
        return redirect('vendor/size')->with('alert' ,'تم تعديل المقاس بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         Size::where('id',$id)->delete();
         return redirect('vendor/size')->with('alert' ,'تم حذف المقاس بنجاح');
    }
}
