<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageCategory;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Facades\Input;

class PackageController extends Controller
{
    public function create(){
        $categories = PackageCategory::all();
        return view('admin.package.create',compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'shortDescription'=>'required',
            'price'=>'required|numeric',
            'itineraries'=>'required',
            'category'=>'required',
            'image'=>'required',
            'location'=>'required',
            'duration'=>'required',
            'returnDate'=>'required',
            'departureDate'=>'required',
            'content'=>'required',
            'noofpeople'=>'required|numeric',
            'discount'=>'required|integer'
        ]);

        $package = new Package();
        if($request->isMethod('post')) {
            $data = $request->all();
//            if ($request->hasFile('image')) {
//                $image_tmp = Input::file('image');
//                if ($image_tmp->isValid()) {
//                    $extension = $image_tmp->getClientOriginalExtension();
//                    $filename = rand(1200, 999999) . '.' . $extension;
//                    $large_image_path = public_path('adminpanel/uploads/package/');
//                    $image_tmp->move($large_image_path, $filename);
//                    $package->image = $filename;
//                }
//            }
            if ($request->hasFile('image')) {
                if ($request->image->isValid()) {
                    $extension = $request->image->getClientOriginalExtension();
                    $filename = rand(1200, 999999) . '.' . $extension;
                    $request->image->move(public_path('adminpanel/uploads/package/'), $filename);
                    $package->image = $filename;
                }


            }
            $package->title = $data['title'];
            $package->shortDescription = ucwords($data['shortDescription']);
            $package->itineraries = ucwords($data['itineraries']);
            $package->content = ucwords($data['content']);
            $package->price = $data['price'];
            $package->duration = $data['duration'];
            $package->returnDate = $data['returnDate'];
            $package->departureDate = $data['departureDate'];
            $package->noofpeople = $data['noofpeople'];
            $package->location = $data['location'];
            $package->discount = $data['discount'];
            $package->category_id = $data['category'];
            $package->save();
            return redirect()->back()->with('message','Created Successfully');
        }
    }
}
