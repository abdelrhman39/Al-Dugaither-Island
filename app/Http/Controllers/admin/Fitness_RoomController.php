<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use File;
use App\Models\Fitness_Room_Header;
use App\Models\Fitness_Room_Images;
use App\Models\Fitness_Room_Levels;
use App\Models\Fitness_Room_Section2;
use App\Models\Fitness_Room_Services;
use App\Models\Fitness_Room_Stories;
use App\Models\Fitness_Room_ContactUs;


class Fitness_RoomController extends Controller
{
    public function index(){

        $Fitness_Room_Header = Fitness_Room_Header::first();
        $Fitness_Room_Section2 = Fitness_Room_Section2::first();
        $Fitness_Room_Images = Fitness_Room_Images::get();
        $Fitness_Room_Services = Fitness_Room_Services::get();
        $Fitness_Room_Levels = Fitness_Room_Levels::get();
        $Fitness_Room_Stories = Fitness_Room_Stories::get();

        $Fi_Room_Services = Fitness_Room_Services::get();

        $Fitness_Room_ContactUs = Fitness_Room_ContactUs::first();




        return view('admin.Fitness_Room.index',['Fitness_Room_Header'=>$Fitness_Room_Header,
                        'Fitness_Room_Section2'=>$Fitness_Room_Section2,
                        'Fitness_Room_Images'=>$Fitness_Room_Images,
                        'Fitness_Room_Levels'=>$Fitness_Room_Levels,
                        'Fitness_Room_Services',$Fitness_Room_Services,
                        'Fitness_Room_Stories'=>$Fitness_Room_Stories,
                        'Fi_Room_Services'=>$Fi_Room_Services,
                        'Fitness_Room_ContactUs'=>$Fitness_Room_ContactUs]);
    }


    // Start Fitness_Room_headr_update

    public function Fitness_Room_headr_update(Request $request){
        $Fitness_Room_Header = Fitness_Room_Header::first();

        $validated = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'fitness_room_name' => 'required|string',
            'fitness_room_name_ar' => 'required|string',
            'text_head_anim1' => 'required|string|max:50',
            'text_head_anim1_ar' => 'required|string|max:50',
            'text_head_anim2' => 'required|string|max:50',
            'text_head_anim2_ar' => 'required|string|max:50',
            'text_head_anim3' => 'required|string|max:50',
            'text_head_anim3_ar' => 'required|string|max:50',
            'text_more' => 'required|string',
            'text_more_ar' => 'required|string',
        ]);


        $updete = Fitness_Room_Header::where('id',$Fitness_Room_Header->id)->first();


        if($request->hasFile('image')){
            file::delete('uploads/fitness_room/'.$updete->image);
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/fitness_room/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }else{
            $validated['image'] = $updete->image;
        }

        $result_edit = Fitness_Room_Header::where('id',$updete->id)->update([
            'image'=> $validated['image'],
            'fitness_room_name'=> $validated['fitness_room_name'],
            'fitness_room_name_ar'=> $validated['fitness_room_name_ar'],
            'text_head_anim1'=> $validated['text_head_anim1'],
            'text_head_anim1_ar'=> $validated['text_head_anim1_ar'],
            'text_head_anim2'=> $validated['text_head_anim2'],
            'text_head_anim2_ar'=> $validated['text_head_anim2_ar'],
            'text_head_anim3'=> $validated['text_head_anim3'],
            'text_head_anim3_ar'=> $validated['text_head_anim3_ar'],
            'text_more'=> $validated['text_more'],
            'text_more_ar'=> $validated['text_more_ar'],

        ]);



        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=>__('admin.worning')]);
        }

    }


    public function Fitness_Room_section2_update(Request $request){
        $Fitness_Room_Header = Fitness_Room_Section2::first();

        $validated = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'text_head' => 'required|string',
            'text_head_ar' => 'required|string',
            'text_more' => 'required|string',
            'text_more_ar' => 'required|string',
            'serv1_text' => 'required|string',
            'serv1_text_ar' => 'required|string',
            'serv2_text' => 'required|string',
            'serv2_text_ar' => 'required|string',
            'serv3_text' => 'required|string',
            'serv3_text_ar' => 'required|string',
            'serv4_text' => 'required|string',
            'serv4_text_ar' => 'required|string',
            'serv5_text' => 'required|string',
            'serv5_text_ar' => 'required|string',

        ]);


        $updete = Fitness_Room_Section2::where('id',$Fitness_Room_Header->id)->first();


        if($request->hasFile('image')){
            file::delete('uploads/fitness_room/'.$updete->image);
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/fitness_room/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }else{
            $validated['image'] = $updete->image;
        }

        $result_edit = Fitness_Room_Section2::where('id',$updete->id)->update([
            'image'        => $validated['image'],
            'text_head'    => $validated['text_head'],
            'text_head_ar' => $validated['text_head_ar'],
            'text_more'    => $validated['text_more'],
            'text_more_ar' => $validated['text_more_ar'],
            'serv1_text'   => $validated['serv1_text'],
            'serv1_text_ar'=> $validated['serv1_text_ar'],
            'serv2_text'   => $validated['serv2_text'],
            'serv2_text_ar'=> $validated['serv2_text_ar'],
            'serv3_text'   => $validated['serv3_text'],
            'serv3_text_ar'=> $validated['serv3_text_ar'],
            'serv4_text'   => $validated['serv4_text'],
            'serv4_text_ar'=> $validated['serv4_text_ar'],
            'serv5_text'   => $validated['serv5_text'],
            'serv5_text_ar'=> $validated['serv5_text_ar'],

        ]);



        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }

    }

    public function Fitness_Room_Services_Add(Request $request){

        $validated = $request->validate([
            'icon' => 'required',
            'text_head' => 'required|string',
            'text_head_ar' => 'required|string',
            'text_desc' => 'required|string',
            'text_desc_ar' => 'required|string',
        ]);


        $result = Fitness_Room_Services::create($validated);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function Fitness_Room_Services_delete($id){
        $result =  Fitness_Room_Services::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }



    public function Fitness_Room_Levels_Add(Request $request){

        $validated = $request->validate([
            'image' => 'required',
            'text_head' => 'required|string',
            'text_head_ar' => 'required|string',
            'text_desc' => 'required|string',
            'text_desc_ar' => 'required|string',
        ]);


        if($request->hasFile('image')){
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/fitness_room/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }

        $result = Fitness_Room_Levels::create($validated);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function Fitness_Room_Levels_delete($id){
        $delete =  Fitness_Room_Levels::where('id',$id)->first();
        if($delete->image){
            file::delete('uploads/fitness_room/'.$delete->image);
        }

        $result = Fitness_Room_Levels::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }



    public function Fitness_Room_Stories_Add(Request $request){

        $validated = $request->validate([
            'user_name' => 'required',
            'user_name_ar' => 'required|string',
            'user_img' => 'required|image|mimes:png,jpg,jpeg',
            'text_view' => 'required|string',
            'text_view_ar' => 'required|string',
        ]);


        if($request->hasFile('user_img')){
            $img = $request->file('user_img');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/fitness_room/';
            $final = $img->move($path,$newName);
            $validated['user_img'] = $newName;
        }

        $result = Fitness_Room_Stories::create($validated);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function Fitness_Room_Stories_delete($id){
        $delete =  Fitness_Room_Stories::where('id',$id)->first();
        if($delete->user_img){
            file::delete('uploads/fitness_room/'.$delete->user_img);
        }

        $result = Fitness_Room_Stories::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function Fitness_Room_ContactUs_update(Request $request){
        $Fitness_Room_ContactUs = Fitness_Room_ContactUs::first();

        $validated = $request->validate([
            'site_description' => 'required|string',
            'site_description_ar' => 'required|string',
            'facebook' => 'required',
            'twitter' => 'required',
            'insta' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);


        $updete = Fitness_Room_ContactUs::where('id',$Fitness_Room_Header->id)->first();


        $result_edit = Fitness_Room_Header::where('id',$updete->id)->update([
            'site_description'=> $validated['site_description'],
            'site_description_ar'=> $validated['site_description_ar'],
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
