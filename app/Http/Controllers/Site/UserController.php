<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Tymon\JWTAuthExceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject as JWTSubject;
use Validator,Auth,Artisan,Hash,File,Crypt;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\UserRole;
use App\Models\AboutUs;
use App\Models\Place;
use carbon\carbon;
use JWTFactory;
use JWTAuth;
use JWT;

class UserController extends Controller
{
    
    public function homePage(){
        $all_category = Category::Selection()->get();

        $about_data =  AboutUs::first();

        return view('website.Home.index', ['all_category' => $all_category , "about_data" => $about_data]);
    }

    public function Site_login(Request $request){

        $remember_me = $request->has('remember_me') ? true : false;
        if( $request->email == null || $request->password ==  null){
            return redirect()->back()->with(['error'=> ' من فضلك أدخل البريد الالكترونى او كلمه السر']);
        }
        if(Auth()->guard('web')->attempt(['email' => $request->input('email') , 'password' => $request->input('password')]) ){
            return redirect()->route('get.site')->with(['success' => auth()->user()->name .' ,مرحبا ']);
        }
        return redirect()->back()->with(['error'=> 'خطأ فى البريد الالكترونى او كلمه السر']);

    }

    public function Site_register(Request $request){
        $created_at = carbon::now()->toDateTimeString();
        $dateTime = date('Y-m-d H:i:s',strtotime('+2 hours',strtotime($created_at)));
        
        $lang = "ar";
        $input = $request->all();

        $validationMessages = [
            'name.required' => $lang == 'ar' ? "من فضلك أدخل الاسم أسمك" : "firstname is required",
            'phone.required' => $lang == 'ar' ? 'من فضك ادخل رقم الهاتف' :"phone is required"  ,
            'phone.unique' => $lang == 'ar' ? 'رقم الهاتف موجود لدينا بالفعل' :"phone is already teken" ,
            'phone.min' => $lang == 'ar' ?  'رقم الهاتف يجب ان لا يقل عن 7 ارقام' :"The phone must be at least 7 numbers" ,
            "password.required" => $lang == 'ar' ? "من فضلك ادخل كلمه السر" : "Password is required",
            'password.confirmed' => $lang == 'ar' ? 'كلمتا السر غير متطابقتان' :"The password confirmation does not match",
            'password.min' => $lang == 'ar' ?  'كلمة السر يجب ان لا تقل عن 6 احرف' :"The password must be at least 6 character" ,       
            'email.required' => $lang == 'ar' ? 'من فضلك ادخل البريد الالكتروني' :"email is required"  ,
            'email.unique' => $lang == 'ar' ? 'هذا البريد الالكتروني موجود لدينا بالفعل' :"email is already token" ,
            'email.regex'=> $lang == 'ar'? 'من فضلك ادخل بريد الكتروني صالح' : 'The email must be a valid email address',
        ];
        $validator = Validator::make($input, [
            'name' => 'required',
            'phone' => 'required|unique:users|min:7',
            'password' => 'required|confirmed|min:6',
            'email' => 'unique:users|regex:/(.+)@(.+)\.(.+)/i',

        ], $validationMessages);

        if ($validator->fails()) {
            return redirect()->back()->with(['error'=> $validator->messages()->first()]);
        }

        $add = new User;
        $add->name	= $request->name;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->password = bcrypt($request->password);
        $add->image =  "img.png";
        $add->state	= "accept";
        // $add->firebase_token = $request->firebase_token;
        $add->created_at = $dateTime;
        $add->save();

        $add_role = new UserRole;
        $add_role->type = 2;                 /// 1 :: admin  2 :: User  3 :: resturant   4 :: delivery
        $add_role->user_id = $add->id;
        $add_role->created_at = $dateTime;
        $add_role->save();  

        if(Auth()->guard('web')->attempt(['email' => $request->input('email') , 'password' => $request->input('password')]) ){
            return redirect()->route('get.site')->with(['success' => auth()->user()->name .' ,مرحبا ']);
        }

    }


    public function profile_dash(){

        $all_category = Category::Selection()->get();
       
        $about_data =  AboutUs::first();
       
        $myPlaces = Place::Selection()->where('places.user_id' , Auth::user()->id)->paginate(3);

        return view('website.profile.main', ['all_category' => $all_category , "about_data" => $about_data, "myPlaces" => $myPlaces]);
    }
}
