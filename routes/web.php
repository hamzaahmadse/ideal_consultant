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

use Illuminate\Http\Request;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/services', 'ServicesController@index')->name('services');
Route::get('/service/{id}', 'ServicesController@service')->name('service-detail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/gdpr', function () {
    return view('gdpr');
})->name('gdpr');


Route::get('send-mail', function(Request $request){

	$data = $request->file;
	Mail::send('emails.default', [], function ($message) use($data){
		$message->to('nuru7495@gmail.com');
	    $message->attachData($data, 'Attachment');
	});

	return redirect()->back();

})->name('send-mail');
