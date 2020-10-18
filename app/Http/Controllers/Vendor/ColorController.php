<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Model\Color;
class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $colors= Color::where('vendor_id',auth()->guard('vendor')->user()->id)->get();
       return view('vendor.color.index' ,compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('vendor.color.create');
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
            'name_ar'=>'required|string',
            'name_en'=>'required|string'
            ]);
        $data['vendor_id']=auth()->guard('vendor')->user()->id;
        Color::create($data);
        return redirect('vendor/color')->with('alert' ,'تم أضافه اللون بنجاح');
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
         $color= Color::findorfail($id);
          return view('vendor.color.edit' ,compact('color'));
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
            'name_ar'=>'required|string',
            'name_en'=>'required|string'
            ]);
        $data['vendor_id']=auth()->guard('vendor')->user()->id;
        Color::where('id',$id)->update($data);
        return redirect('vendor/color')->with('alert' ,'تم تعديل اللون بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         Color::where('id',$id)->delete();
         return redirect('vendor/color')->with('alert' ,'تم حذف اللون بنجاح');
    }
}
