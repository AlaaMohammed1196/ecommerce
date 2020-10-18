<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name_ar','name_en','body_en','body_ar','price1','price2','dep_id','vendor_id'];

public function categories(){
	return $this->belongsTo('App\Model\Category' ,'dep_id');
}
public function images(){
	return $this->hasMany('App\Model\Image' ,'product_id');
}

public function colors(){
	return $this->belongsToMany('App\Model\Color','App\Model\ProductColor');
}
public function sizes(){
	return $this->belongsToMany('App\Model\Size','App\Model\ProductSize');
}

}

