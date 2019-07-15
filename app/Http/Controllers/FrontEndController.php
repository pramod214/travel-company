<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageCategory;
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
        $categories = PackageCategory::all();
        $tour = Package::latest()->get();
        return view('frontend.tour',compact('categories','tour'));
    }

    public function destination(){
        return view('frontend.destination');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
