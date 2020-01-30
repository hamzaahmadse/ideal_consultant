<?php

namespace App\Http\Controllers;

use App\Service;
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


        Mail::to('hamza.ahmad0932@gmail.com')->send(new RequestCallbackMail($request->all()));
    }
}
