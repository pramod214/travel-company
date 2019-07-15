<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Image;

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
            if ($request->hasFile('image')) {
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1200, 999999) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/package/');
                    $image_tmp->move($large_image_path, $filename);
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
            return redirect()->route('package.index')->with('message','Created Successfully');
        }
    }

    public function index(){
        $packages = Package::latest()->get();
        return view('admin.package.index',compact('packages'));
    }

    public function edit($id){
        $package = Package::findOrFail($id);
        $categories = PackageCategory::all();
        return view('admin.package.edit',compact('package','categories'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'title'=>'required',
            'shortDescription'=>'required',
            'price'=>'required|numeric',
            'itineraries'=>'required',
            'category'=>'required',
            'location'=>'required',
            'duration'=>'required',
            'returnDate'=>'required',
            'departureDate'=>'required',
            'content'=>'required',
            'noofpeople'=>'required|numeric',
            'discount'=>'required|integer',
            'showinhome'=>'required'
        ]);
        if($request->showinhome==1){
            $showinhomecheck  =Package::where('showinhome','=','1')->get();

            if(count($showinhomecheck)>6){
                return redirect()->back()->with('message','There is already one package is selected for home');
            }
        }
        $showinhome=0;
        $package = Package::findOrFail($id);
        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image') !=null){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(1200, 999999) . '.' . $extension;
                    $large_image_path = public_path('adminpanel/uploads/package/');
                    $image_tmp->move($large_image_path, $filename);
                    $package->image = $filename;
                }
                if($request->showinhome==1){
                    $showinhome=1;
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
            $package->showinhome=$showinhome;
            $package->category_id = $data['category'];
            $package->save();
            return redirect()->route('package.index')->with('message','Updated Successfully');
        }
            else{

                if($request->showinhome==1){
                    $showinhome=1;
                }
                $package->title = $data['title'];
                $package->showinhome=$showinhome;
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
                return redirect()->route('package.index')->with('message','Updated Successfully');
            }
        }
    }

    public function delete($id){
        $package = Package::findOrFail($id);
        $package->delete();
        return redirect()->route('package.index')->with('message','Deleted Successfully');
    }
}
