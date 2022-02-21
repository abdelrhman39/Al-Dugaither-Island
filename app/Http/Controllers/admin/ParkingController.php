<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Parking;
use App\Models\Parking_Services;
use App\Models\Parking_About_Us;
use File;

class ParkingController extends Controller
{
    public function index(){
        $Parking = Parking::get();
        $Parking_Services = Parking_Services::get();
        $Parking_About_Us = Parking_About_Us::first();

        return view('admin.Parking.index', ['Parking'=>$Parking,'Parking_Services'=>$Parking_Services,
                            'Parking_About_Us'=>$Parking_About_Us]);
    }


    public function Parking_Add(Request $request){
        $validated = $request->validate([
            'parking_name' => 'required',
            'parking_name_ar' => 'required|string',
            'parking_desc' => 'required|string',
            'parking_desc_ar' => 'required|string',
            'parking_img' => 'required|image|mimes:png,jpg,jpeg',

        ]);


        if($request->hasFile('parking_img')){
            $img = $request->file('parking_img');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Parking/';
            $final = $img->move($path,$newName);
            $validated['parking_img'] = $newName;
        }

        $result = Parking::create($validated);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }

    public function Parking_delete($id){
        $delete =  Parking::where('id',$id)->first();
        if($delete->image){
            file::delete('uploads/Parking/'.$delete->parking_img);
        }

        $result = Parking::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function Parking_Services_Add(Request $request){
        $validated = $request->validate([
            'icon' => 'required',
            'serv_name' => 'required',
            'serv_name_ar' => 'required|string',
            'serv_desc' => 'required|string',
            'serv_desc_ar' => 'required|string',
        ]);

        $result = Parking_Services::create($validated);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function Parking_Services_delete($id){
        $result = Parking_Services::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }



    public function Parking_AboutUs_update(Request $request){
        $Parking_About_Us = Parking_About_Us::first();


        $validated = $request->validate([
            'about_desc' => 'required|string',
            'about_desc_ar' => 'required|string',
            'video' => 'required',
            'image_video' =>'',
            'facebook' => 'required',
            'twitter' => 'required',
            'insta' => 'required',
            'phone' => 'required',
            'email' => 'required|email',

        ]);


        if($request->hasFile('image_video')){
            file::delete('uploads/Parking/'.$updete->image_video);
            $img = $request->file('image_video');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Parking/';
            $final = $img->move($path,$newName);
            $validated['image_video'] = $newName;
        }else{
            $validated['image_video'] = $updete->image_video;
        }


        $updete = Parking_About_Us::first();


        $result_edit = Parking_About_Us::where('id',$updete->id)->update([
            'about_desc'=> $validated['about_desc'],
            'about_desc_ar'=> $validated['about_desc_ar'],
            'video'=> $validated['video'],
            'image_video'=> $validated['image_video'],
            'facebook'=> $validated['facebook'],
            'twitter'=> $validated['twitter'],
            'insta'=> $validated['insta'],
            'phone'=> $validated['phone'],
            'email'=> $validated['email'],

        ]);



        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }
}
