<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware'=>'auth'],function (){
Route::get('/', 'BsInvoiceController@add_view')->name('home');
 /* Route::get('/', function () {
    return view('invoices.add');
})->name('home');*/
     Route::get('/invoice', 'BsInvoiceController@index')->name('invoice_list');

    Route::get('/invoice/create', 'BsInvoiceController@add_view')->name('invoice_create');
    
    Route::post('/invoice/add', 'BsInvoiceController@add')->name('invoice_add');
    Route::post('/invoice/order_previous', 'BsInvoiceController@previous')->name('invoice_previous');
    Route::post('/invoice/edit', 'BsInvoiceController@edit')->name('invoice_edit');
    Route::get('/invoice_delete/{id}', 'BsInvoiceController@delete')->name('invoice_delete');
    Route::get('/invoice/item_fill/{id}', 'BsInvoiceController@item_view')->name('invoice_item');
  
    Route::get('/invoice/gst_fill/{id}', 'BsInvoiceController@gst_view')->name('invoice_gst');
    
    //invoice route
    
    
    
    
   
});

     
    
    


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/create', function () {
    return view('users.add');
})->name('admin_create');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin/users', 'BsUsersController@index')->name('admin_users_list');
Route::post('/admin/add', 'BsUsersController@add')->name('admin_add');
Route::post('/admin/login', 'BsUsersController@login')->name('admin_login');
Route::post('/admin/edit', 'BsUsersController@edit')->name('admin_edit');
Route::get('/edit/{id}', 'BsUsersController@edit_view')->name('admin_edit_view');
Route::get('/edit_status/{id}/{status}', 'BsUsersController@edit_staus')->name('admin_edit_status');

Auth::routes();
 Route::get('/invoice/create', 'BsInvoiceController@add_view')->name('invoice_create');




Auth::routes();
/*
Route::get('/home', 'HomeController@index')->name('home');*/
