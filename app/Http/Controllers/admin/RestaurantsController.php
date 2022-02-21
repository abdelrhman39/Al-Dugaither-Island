<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Restaurants;
use App\Models\RestaurantsImages;
use File;
use App\Models\Restaurant_Services;
use App\Models\RestaurantsProducts;
use App\Models\Restaurant_Chefs;
use App\Models\Restaurant_Menu;
use App\Models\Category_Restaurant_Menu;
use App\Mail\ContacttMail;
use Mail;


class RestaurantsController extends Controller
{
    public function all_restaurants()
    {
        $Restaurants = Restaurants::leftjoin('admins','admins.id','=','restaurants.admin_id')
        ->select('restaurants.*','admins.name as admin_Name')->get();

        $RestaurantsImages = RestaurantsImages::get();

        $Restaurant_Services = Restaurant_Services::get();

        $RestaurantsProducts = RestaurantsProducts::get();

        $Restaurant_Chefs = Restaurant_Chefs::get();

        $Category_Restaurant_Menu = Category_Restaurant_Menu::get();

        $Restaurant_Menu = Restaurant_Menu::
        leftjoin('restaurant_menu_category','restaurant_menu_category.id','=','restaurant_menu.menu_cat_id')
        ->select('restaurant_menu.*','restaurant_menu_category.name as Category_Name','restaurant_menu_category.icon')->get();


        $admins = Admin::get();
        return view('admin.restaurants.show',['Restaurants'=>$Restaurants,
                    'RestaurantsImages'=>$RestaurantsImages,
                    'Restaurant_Services'=>$Restaurant_Services,
                    'RestaurantsProducts'=>$RestaurantsProducts,
                    'Restaurant_Chefs'=>$Restaurant_Chefs,
                    'Restaurant_Menu'=>$Restaurant_Menu,
                    'Category_Restaurant_Menu'=>$Category_Restaurant_Menu,'admins'=>$admins]);
    }

    public function add_restaurants(Request $request)
    {
        $validated = $request->validate([
            'logo' => 'required|image|mimes:png,jpg,jpeg',
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'main_image' => 'required|image|mimes:png,jpg,jpeg',
            'main_img_bg' => 'required|image|mimes:png,jpg,jpeg',
            'experience' => 'integer',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'facebook' => 'required',
            'twitter' => 'required',
            'insta' => 'required',
            'linkedin' => 'required',
            'whatsapp' => 'required',
            'admin_id' => 'required',
        ]);

        if($request->hasFile('logo')){
            $img = $request->file('logo');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Restaurants/';
            $final = $img->move($path,$newName);
            $validated['logo'] = $newName;
        }
        if($request->hasFile('main_image')){
            $img = $request->file('main_image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Restaurants/';
            $final = $img->move($path,$newName);
            $validated['main_image'] = $newName;
        }
        if($request->hasFile('main_img_bg')){
            $img = $request->file('main_img_bg');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Restaurants/';
            $final = $img->move($path,$newName);
            $validated['main_img_bg'] = $newName;
        }

        $result = Restaurants::create($validated);
        if($result){
            if($request->hasFile('images')){
                $images = $request->images;
                foreach($images as $img){
                    $extension = $img->extension();
                    $newName= uniqid('',true).'.'.$extension;
                    $path = 'uploads/Restaurants/';
                    $final = $img->move($path,$newName);

                    RestaurantsImages::create([
                        'image' => $newName,
                        'Restaurant_id' =>$result->id
                    ]);
                }
            }
        }



        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }


    public function delete_restaurants($id){
        $del_Id = Restaurants::select()->firstOrFail($id);

        if(file_exists('uploads/Restaurants/'.$del_Id->logo)){
            file::delete('uploads/Restaurants/'.$del_Id->logo);
        }
        if(file_exists('uploads/Restaurants/'.$del_Id->main_image)){
            file::delete('uploads/Restaurants/'.$del_Id->main_image);
        }
        if(file_exists('uploads/Restaurants/'.$del_Id->main_img_bg)){
            file::delete('uploads/Restaurants/'.$del_Id->main_img_bg);
        }

        $id_images = RestaurantsImages::where('Restaurant_id',$id)->get();

        foreach($id_images as $img){
            if(file_exists('uploads/Restaurants/'.$img->image)){
                file::delete('uploads/Restaurants/'.$img->image);
            }
        }

        $result = $del_Id->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }


    public function update_restaurants($id, Request $request){

        $validated = $request->validate([
            'logo' => 'image|mimes:png,jpg,jpeg',
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'main_image' => 'image|mimes:png,jpg,jpeg',
            'main_img_bg' => 'image|mimes:png,jpg,jpeg',
            'experience' => 'integer',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'facebook' => 'required',
            'twitter' => 'required',
            'insta' => 'required',
            'linkedin' => 'required',
            'whatsapp' => 'required',
            'admin_id' => 'required',
        ]);


        $Restaurants = Restaurants::get();
        $updete = Restaurants::where('id',$request->id)->first();

        if($request->hasFile('logo')){
            file::delete('uploads/Restaurants/'.$updete->logo);
            $img = $request->file('logo');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Restaurants/';
            $final = $img->move($path,$newName);
            $validated['logo'] = $newName;
        }else{
            $validated['logo'] = $updete->logo;
        }

        if($request->hasFile('main_image')){
            file::delete('uploads/Restaurants/'.$updete->main_image);
            $img = $request->file('main_image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Restaurants/';
            $final = $img->move($path,$newName);
            $validated['main_image'] = $newName;
        }else{
            $validated['main_image'] = $updete->main_image;
        }

        if($request->hasFile('main_img_bg')){
            file::delete('uploads/Restaurants/'.$updete->main_img_bg);
            $img = $request->file('main_img_bg');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Restaurants/';
            $final = $img->move($path,$newName);
            $validated['main_img_bg'] = $newName;
        }else{
            $validated['main_img_bg']= $updete->main_img_bg;
        }




        $result_edit = Restaurants::where('id',$request->id)->update([
            'logo'=> $validated['logo'],
            'name'=> $validated['name'],
            'name_ar'=> $validated['name_ar'],
            'description'=> $validated['description'],
            'description_ar'=> $validated['description_ar'],
            'main_image'=> $validated['main_image'],
            'main_img_bg'=> $validated['main_img_bg'],
            'experience'=> $validated['experience'],
            'email'=> $validated['email'],
            'phone'=> $validated['phone'],
            'facebook'=> $validated['facebook'],
            'twitter'=> $validated['twitter'],
            'insta'=> $validated['insta'],
            'linkedin'=> $validated['linkedin'],
            'admin_id'=> $validated['admin_id'],
        ]);


        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }




    public function Add_Image_restaurants($id,Request $request){
        $result=false;

        if($request->image){
            $images = $request->image;
            foreach($images as $img){
                $extension = $img->extension();
                $newName= uniqid('',true).'.'.$extension;
                $path = 'uploads/Restaurants/';
                $final = $img->move($path,$newName);

               $result = RestaurantsImages::create([
                    'image' => $newName,
                    'Restaurant_id' =>$id
                ]);
            }
        }

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }




    public function delete_Image_restaurants($id){
        $delete = RestaurantsImages::where('id',$id)->first();

        if(file_exists('uploads/Restaurants/'.$delete->image)){
            file::delete('uploads/Restaurants/'.$delete->image);
        }

        $result = $delete->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }


    public function Add_Services_Restaurants(Request $request){
        $ServicesHome = Restaurant_Services::get();
        $result = Restaurant_Services::create([
            'services_name'=> $request->services_name,
            'services_name_ar'=> $request->services_name_ar,
            'services_desc'=> $request->services_desc,
            'services_desc_ar'=> $request->services_desc_ar,
            'icon'=> $request->icon,
            'Restaurant_id' => $request->Restaurant_id
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }

    public function delete_Services_restaurants($id){

        $result = Restaurant_Services::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }

    public function Edit_And_Update_ServicesRestaurant($id, Request $request){
        $ServicesHome = Restaurant_Services::get();
        $result_edit = Restaurant_Services::where('id',$request->id)->update([
            'services_name'=> $request->services_name,
            'services_name_ar'=> $request->services_name_ar,
            'services_desc'=> $request->services_desc,
            'services_desc_ar'=> $request->services_desc_ar,
            'icon'=> $request->icon,
        ]);
        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }

    public function Add_Products_Restaurants(Request $request ){

        $validated = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'product_name' => 'required|string',
            'product_name_ar' => 'required|string',
            'product_description' => 'required|string',
            'product_description_ar' => 'required|string',
            'price' => 'required',
            'Restaurant_id' => 'required',
        ]);


        if($request->hasFile('image')){
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/products/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }

        $result = RestaurantsProducts::create($validated);
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function delete_Products_restaurants($id){

        $del_Id = RestaurantsProducts::select()->firstOrFail($id);

        if(file_exists('uploads/products/'.$del_Id->image)){
            file::delete('uploads/products/'.$del_Id->image);
        }

        $result = RestaurantsProducts::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }

    public function Edit_And_Update_ProductsRestaurant($id, Request $request){
        $validated = $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg',
            'product_name' => 'required|string',
            'product_name_ar' => 'required|string',
            'product_description' => 'required|string',
            'product_description_ar' => 'required|string',
            'price' => 'required',
        ]);

        $updete = RestaurantsProducts::where('id',$request->id)->first();

        if($request->hasFile('image')){
            file::delete('uploads/Products/'.$updete->image);
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/products/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }else{
            $validated['image'] = $updete->image;
        }

        $result_edit = RestaurantsProducts::where('id',$request->id)->update([
            'image'=> $validated['image'],
            'product_name'=> $validated['product_name'],
            'product_name_ar'=> $validated['product_name_ar'],
            'product_description'=> $validated['product_description'],
            'product_description_ar'=> $validated['product_description_ar'],
            'price'=> $validated['price'],

        ]);

        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function Add_Chefs_Restaurants(Request $request){
        $validated = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'chef_name' => 'required|string',
            'chef_name_ar' => 'required|string',
            'Specialization' => 'required|string',
            'Specialization_ar' => 'required|string',
            'facebook' => '',
            'twitter' => '',
            'insta' => '',
            'Restaurant_id' => 'required',
        ]);


        if($request->hasFile('image')){
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Chefs/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }

        $result = Restaurant_Chefs::create($validated);
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }

    public function delete_Chefs_restaurants($id){
        $del_Id = Restaurant_Chefs::select()->firstOrFail($id);

        if(file_exists('uploads/Chefs/'.$del_Id->image)){
            file::delete('uploads/Chefs/'.$del_Id->image);
        }

        $result = Restaurant_Chefs::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }

    public function Edit_And_Update_ChefsRestaurant($id, Request $request){
        $validated = $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg',
            'chef_name' => 'required|string',
            'chef_name_ar' => 'required|string',
            'Specialization' => 'required|string',
            'Specialization_ar' => 'required|string',
            'facebook' => '',
            'twitter' => '',
            'insta' => '',
        ]);

        $updete = Restaurant_Chefs::where('id',$id)->first();

        if($request->hasFile('image')){
            file::delete('uploads/Chefs/'.$updete->image);
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Chefs/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }else{
            $validated['image'] = $updete->image;
        }

        $result_edit = Restaurant_Chefs::where('id',$request->id)->update([
            'image'=> $validated['image'],
            'chef_name'=> $validated['chef_name'],
            'chef_name_ar'=> $validated['chef_name_ar'],
            'Specialization'=> $validated['Specialization'],
            'Specialization_ar'=> $validated['Specialization_ar'],
            'facebook'=> $validated['facebook'],
            'twitter'=> $validated['twitter'],
            'insta'=> $validated['insta'],

        ]);

        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }





    public function Add_Menu_Restaurants(Request $request){
        $validated = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'product_name' => 'required|string',
            'product_name_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'price' => 'required',
            'menu_cat_id' => 'required',
            'Restaurant_id' => 'required',
        ]);


        if($request->hasFile('image')){
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Menu/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }

        $result = Restaurant_Menu::create($validated);
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }

    public function delete_Menu_restaurants($id){
        $del_Id = Restaurant_Menu::select()->firstOrFail($id);

        if(file_exists('uploads/Menu/'.$del_Id->image)){
            file::delete('uploads/Menu/'.$del_Id->image);
        }

        $result = Restaurant_Menu::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['errorr'=> __('admin.worning')]);
        }
    }


    public function Edit_And_Update_MenuRestaurant($id, Request $request){
        $validated = $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg',
            'product_name' => 'required|string',
            'product_name_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'price' => 'required',
            'menu_cat_id' => 'required',
        ]);

        $updete = Restaurant_Menu::where('id',$id)->first();

        if($request->hasFile('image')){
            file::delete('uploads/Menu/'.$updete->image);
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/Menu/';
            $final = $img->move($path,$newName);
            $validated['image'] = $newName;
        }else{
            $validated['image'] = $updete->image;
        }

        $result_edit = Restaurant_Menu::where('id',$request->id)->update([
            'image'=> $validated['image'],
            'product_name'=> $validated['product_name'],
            'product_name_ar'=> $validated['product_name_ar'],
            'description'=> $validated['description'],
            'description_ar'=> $validated['description_ar'],
            'price'=> $validated['price'],
            'menu_cat_id'=> $validated['menu_cat_id'],

        ]);

        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }


    public function send_mail(Request $request){
        // dd($request);

            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
                'email_send' => 'required',
            ]);

            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' -> $request->message,
            ];

            $result = Mail::to($request->email_send)->send(new ContacttMail($details));
            if($result){
                return redirect()->back()->with(['success'=> __('admin.Email is Sent succssfuly')]);
            }else{
                return redirect()->back()->with(['error'=> __('admin.worning')]);
            }

    }
}
