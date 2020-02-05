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


Route::post('/request-callback', 'HomeController@requestCallback')->name('request_callback');
Route::post('/contact-us-mail', 'HomeController@contactUsMail')->name('contact_us_mail');

Route::post('send-mail', function(Request $request){

	$request->validate([
        'file' => 'required|mimes:pdf,docx,jpg,png'
	]);

	$data = $request->file;

	Mail::send('emails.default', [], function ($message) use($data){
		$message->to(env('HOST_EMAIL'));
		$message->subject("User Uploaded a CV.");
		$message->attach($data->getRealPath(), [
			'as' => $data->getClientOriginalName(),
			'mime' => $data->getMimeType()
		 ]);
	});
	return redirect()->back()->with('success', 'You CV has been Uploaded.');

})->name('send-mail');
