<?php

Route::group(['prefix'=>'vendor' ,'namespace'=>'Vendor'] ,function(){


Route::group(['middleware'=>'guest:vendor'] ,function(){

  Route::get('login' ,'vendorcontroller@login');
Route::post('login' ,'vendorcontroller@doLogin')->name('doLogin');
});

Route::group(['middleware'=>'auth:vendor'] ,function(){
Route::get('Logout' ,'vendorcontroller@Logout');

Route::get('setting' ,'settingController@show_setting');
Route::post('setting' ,'settingController@setting');

Route::resource('product' ,'productController');
Route::resource('size' ,'sizeController');
Route::resource('color' ,'ColorController');

});
});
