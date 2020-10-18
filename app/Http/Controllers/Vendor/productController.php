<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Color;
use App\Model\Size;
use App\Model\Category;
use App\Model\ProductColor;
use App\Model\ProductSize;
use App\Model\Image;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::where('vendor_id' ,auth()->guard('vendor')->user()->id)->with('categories')->get();
        return view('vendor.product.index' ,compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $colors=Color::all();
            $sizes=Size::all();
            $categoreis =Category::all();

          return view('vendor.product.create' ,compact('categoreis' ,'sizes' ,'colors'));
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
            'name_ar' =>'required|string',
            'name_en' =>'required|string',
            'body_en' =>'required|string',
            'body_ar' =>'required|string',
            'price1'=>'required|numeric',
            'price2' =>'required|numeric',
            'dep_id'=>'required|numeric',
            'size_id'=>'required',
            'color_id'=>'required',
            'image'=>'required'
            ]);

         $data['vendor_id']=auth()->guard('vendor')->user()->id;
         $product=Product::create($data);
       


foreach(request('size_id') as $size){
    ProductSize::create([ 'size_id' =>$size ,'product_id'=>$product->id ]);
}
foreach(request('color_id') as $color){
    ProductColor::create([ 'color_id' =>$color ,'product_id'=>$product->id ]);
}
foreach(request('image') as $image){
       
       $newname=$image->HashName();

       $image->move(public_path('product'),$newname);
       $newname='public/product/'.$newname;

    Image::create([ 'image' =>$newname ,'product_id'=>$product->id ]);
}
    

        return redirect('vendor/product')->with('alert' ,'تم أضافه المنتج بنجاح');
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


         $colors=Color::all();
            $sizes=Size::all();
            $categoreis =Category::all();
            $product=Product::with(['images' ,'colors','sizes'])->where('vendor_id' ,auth()->guard('vendor')->user()->id)->where('id',$id)->firstorfail();
         
          return view('vendor.product.edit' ,compact('categoreis' ,'sizes' ,'colors' ,'product'));
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
       //dd(request()->all());
         $data=$this->validate($request ,[
            'name_ar' =>'required|string',
            'name_en' =>'required|string',
            'body_en' =>'required|string',
            'body_ar' =>'required|string',
            'price1'=>'required|numeric',
            'price2' =>'required|numeric',
            'dep_id'=>'required|numeric',
            'size_id'=>'sometimes|nullable',
            'color_id'=>'sometimes|nullable',
            'image'=>'sometimes|nullable'
            ]);


unset($data['image']);
unset($data['color_id']);
unset($data['size_id']);

         $data['vendor_id']=auth()->guard('vendor')->user()->id;
         $product=Product::where('id',$id)->update($data);
       

if(request()->has('size_id')){
    ProductSize::where('product_id',$id)->delete();

foreach(request('size_id') as $size){
    ProductSize::create([ 'size_id' =>$size ,'product_id'=>$id ]);
}
}

if(request()->has('color_id')){
    ProductColor::where('product_id',$id)->delete();
foreach(request('color_id') as $color){
    ProductColor::create([ 'color_id' =>$color ,'product_id'=>$id ]);
}
}

if(request()->has('image')){

    Image::where('product_id',$id)->delete();

foreach(request('image') as $image){
       
       $newname=$image->HashName();

       $image->move(public_path('product'),$newname);
       $newname='public/product/'.$newname;

    Image::create([ 'image' =>$newname ,'product_id'=>$id ]);
}
    
    }
       return redirect('vendor/product')->with('alert' ,'تم أضافه المنتج بنجاح');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        
         return redirect('vendor/product')->with('alert' ,'تم حذف المنتج بنجاح');
    }
}
