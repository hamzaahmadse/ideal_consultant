<?php

namespace App\Http\Controllers;

use App\Service;
use App\Mail\ContactUsMail;
use App\Mail\RequestCallbackMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){

        $services = Service::take(3)->get();
        return view('home', ['services'=> $services]);
    }

    public function requestCallback(Request $request){

        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required|regex:^[0-9-()\s]+$^|min:5'
        ]);

//arslan@idealconsultancy.co.uk
        Mail::to('arslan@idealconsultancy.co.uk')->send(new RequestCallbackMail($request->all()));

        return redirect()->back()->with('success', 'Callback request send successfully.');
    }

    public function contactUsMail(Request $request){

        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email',
            'message'=> 'required'
        ]);

//arslan@idealconsultancy.co.uk
        Mail::to('arslan@idealconsultancy.co.uk')->send(new ContactUsMail($request->all()));

        return 'Message delivered successfully.';
    }
}
