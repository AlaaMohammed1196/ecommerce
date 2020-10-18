<?php


Route::group(['prefix'=>'admin' ,'namespace'=>'admin'] ,function(){


Route::group(['middleware'=>'guest:admin'] ,function(){

  Route::get('login' ,'adminController@login');
Route::post('login' ,'adminController@doLogin')->name('doLoginadmin');
});

Route::group(['middleware'=>'auth:admin'] ,function(){
Route::get('Logout' ,'adminController@Logout');

Route::get('setting' ,'settingController@show_setting');
Route::post('setting' ,'settingController@setting');



	Route::get('admin','admincontroller@index');
	Route::get('create','admincontroller@create');
    
	
	Route::post('admin' ,'admincontroller@store')->name('save_admin');
	Route::get('edit/{id}' ,'admincontroller@edit')->name('admin.edit');
	Route::post('update/{id}' ,'admincontroller@update')->name('admin.update');
	Route::post('delete{id}' ,'admincontroller@delete')->name('admin.delete');



Route::get('setting' ,'settingController@setting');



Route::resource('category','CategoryController');
Route::resource('delivery','deliveryController');


Route::get('vendors','vendorController@index');
Route::get('vendors/{id}','vendorController@edit')->name('vendorEdit');
Route::post('vendors/{id}','vendorController@update')->name('vendorupdate');
Route::post('vendors/delete/{id}','vendorController@destroy')->name('vendordestroy');



});




});
