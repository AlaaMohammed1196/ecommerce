<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function show_all_orders($type){
    	$orders=Order::where('type',$type)->get();

    	return view('admin.order.index' ,compact('orders'));
    }

}
