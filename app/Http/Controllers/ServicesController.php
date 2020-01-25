<?php

namespace App\Http\Controllers;

use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){

        $services = Service::all();

        return view('services', ['services'=> $services]);

    }

    public function service($id){

        $service = Service::find($id);
        $other_services = Service::where('id', '!=', $id)->get();

        return view('service-detail', [
            'service'=> $service,
            'other_services'=>$other_services
        ]);
    }
}
