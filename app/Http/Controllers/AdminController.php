<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Book;
use App\Enquiry;
use App\Package;
use App\Slider;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }


    public function admin_dashboard(){
        $package = Package::all();
        $slider = Slider::all();
        $slidercount = $slider->count();
        $user = User::all();
        $blog = Blog::all();
        $blogcount = $blog->count();
        $packagecount  = $package->count();
        $usercount = $user->count();
        $book = Book::all();
        $bookcount = $book->count();
        $enquiry = Enquiry::all();
        $enquirycount = $enquiry->count();
        return view('admin.dashboard',compact('packagecount','usercount','blogcount','slidercount','bookcount','enquirycount'));
    }
}
