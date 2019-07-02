<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:web');
    }


    public function admin_dashboard(){
        return view('admin.dashboard');
    }
}
