<?php

namespace App\Http\Controllers;

use App\Package;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }


    public function admin_dashboard(){
        $package = Package::all();
        $user = User::all();
        $packagecount  = $package->count();
        $usercount = $user->count();
        return view('admin.dashboard',compact('packagecount','usercount'));
    }
}
