<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//-----------------   Admin & Index  || Get  ------------------//
Route::get('/', 'ProductController@index');
Route::get('/admin', 'ProductController@admin');
//-----------------   Admin  -> New  -> Product  ------------------//
Route::get('/new_product', 'ProductController@new_product')->name('product');
Route::post('newpro', 'ProductController@storeproduct');
//-----------------   Admin -> New  ->  Category  ------------------//
Route::get('/new_category', 'ProductController@new_category')->name('category');
Route::post('newcat', 'ProductController@storecategory');
//-----------------   Admin -> New  -> Main Category  ------------------//
Route::get('/new_maincategory', 'ProductController@new_maincategory')->name('maincategory');
Route::post('newmaincat', 'ProductController@storemaincategory');
//-----------------   Index ||Contact   ------------------//
Route::get('/contact', 'ProductController@contact');
Route::post('contact', 'ProductController@storecontact');
//-----------------   Index ||Subscribe   ------------------//
Route::post('subscribe', 'ProductController@storesubscribes');
//-----------------   Admin -> New  -> Website  ------------------//
Route::get('/website', 'ProductController@website');
Route::post('website', 'ProductController@storeswebsite');
//-----------------   Admin -> New  -> FAQS  ------------------//
Route::get('/new_faqs', 'ProductController@faqs')->name('faqs');
Route::post('faqs', 'ProductController@newfaqs');
Route::get('/faqs', 'ProductController@showfaqs');
Route::get('/about', 'ProductController@about');

//-----------------------   Admin -> View   ------------------------//
Route::get('/view_products', 'ProductController@view_products')->name('vproduct');
Route::get('/edit_products/{product}', 'ProductController@edit_products');
Route::post('/edit_products/{product}', 'ProductController@update_products');
Route::get('/view_categories', 'ProductController@view_categories')->name('vcategory');
Route::get('/view_maincategories', 'ProductController@view_maincategories')->name('vmaincategory');
Route::get('/view_subscribes', 'ProductController@view_subscribes')->name('vsubscribes');
Route::get('/view_contacts', 'ProductController@view_contacts')->name('vcontact');//will be replaced
Route::get('/view_website', 'ProductController@view_website')->name('vwebsite');
Route::get('/view_faqs', 'ProductController@view_faqs')->name('vfaqs');
//--------------------------------------------------------------------//



//-----------------   Admin -> View  -> Delete  ------------------//
Route::delete('faqs/{id}','ProductController@destroy');
Route::delete('contacts/{id}','ProductController@destroy_con');
Route::delete('category/{name}','ProductController@destroy_cat');
Route::delete('products/{id}','ProductController@destroy_pro');
Route::delete('subscribes/{id}','ProductController@destroy_sub');
Route::delete('main_category/{id}','ProductController@destroy_main');
Route::delete('faqs/{id}','ProductController@destroy');
//--------------------------------------------------------------------//









