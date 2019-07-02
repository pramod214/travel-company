<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function blogs(){
        return view('frontend.blogs');
    }

    public function tour(){
        return view('frontend.tour');
    }

    public function destination(){
        return view('frontend.destination');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
