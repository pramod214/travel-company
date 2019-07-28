<?php

namespace App\Http\Controllers;

use App\Mail\Admin;
use App\Mail\Approve;
use App\Mail\Booking;
use App\Mail\Enquiry;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendBookingMail(Request $request){
        $package=Package::find($request->package_id);
        if($request->isMethod('post')){
            $array=array($request->all());
            $array['package'] = $package;
            Mail::to('pramod.neupane21@gmail.com')->send(new Booking($array));
        }
        return redirect()->back()->with('success_message', 'Thankyou for booking');

    }

    public function sendBookingMailAdmin(Request $request){
        $package=Package::find($request->package_id);
        if($request->isMethod('post')){
            $array=array($request->all());
            $array['package'] = $package;
            Mail::to('pramod.neupane21@gmail.com')->send(new Admin($array));
        }
        return redirect()->back()->with('success_message', 'Thankyou for booking');

    }

    public function sendApproveMail($book,$package){
        Mail::to($book->email)->send(new Approve($book,$package));
    }

    public function sendEnquiryMail(Request $request){
        if($request->isMethod('post')){
           $array = array($request->all());
            Mail::to('pramod.neupane21@gmail.com')->send(new Enquiry($array));
        }
    }
}
