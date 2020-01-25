<?php

namespace App\Http\Controllers;

use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $services = Service::take(3)->get();
        return view('home', ['services'=> $services]);
    }
}
