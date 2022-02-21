<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\AboutUs;
use Auth;

class mainController extends Controller
{   
    
    public function homePage(){
        $all_category = Category::Selection()->get();

        $about_data = AboutUs::first();

        return view('website.Home.index', ['all_category' => $all_category, 'about_data' =>  $about_data]);
    }  

    public function get_subcategory($categoryID){
        $data = SubCategory::select('name', 'id')->where('category_id', $categoryID)->get();
        return response()->json($data);
    }

    public function site_logout(Request $request) {
        Auth::guard('web')->logout();
        $this->guard('web')->logout();

        $request->session()->invalidate();
        return redirect('/index');
    }

    public function contactUs(){
        $all_category = Category::Selection()->get();

        $about_data = AboutUs::first();

        return view('website.aboutUs.contact', ['all_category' => $all_category, 'about_data' => $about_data]);
    }

}
