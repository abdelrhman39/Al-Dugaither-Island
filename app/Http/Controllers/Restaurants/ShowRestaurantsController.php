<?php

namespace App\Http\Controllers\Restaurants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Restaurants;
use App\Models\Restaurant_Menu;
use App\Models\Restaurant_Chefs;
use App\Models\RestaurantsImages;
use App\Models\Restaurant_Services;
use App\Models\RestaurantsProducts;
use App\Models\Category_Restaurant_Menu;
use App\Models\bg_Sections_Restaurant;


class ShowRestaurantsController extends Controller
{
    public function index($id)
    {
        $Restaurants = Restaurants::leftjoin('admins','admins.id','=','restaurants.admin_id')
        ->select('restaurants.*','admins.name as admin_Name')->where('restaurants.id',$id)->get();

        $Restaurant_Services = Restaurant_Services::where('Restaurant_id',$id)->get();


        $RestaurantsImages = RestaurantsImages::where('Restaurant_id',$id)->get();

        $Category_Restaurant_Menu = Category_Restaurant_Menu::get();

        $RestaurantsProducts = RestaurantsProducts::where('Restaurant_id',$id)->get();

        $Restaurant_Chefs = Restaurant_Chefs::where('Restaurant_id',$id)->get();

        $bg_section = bg_Sections_Restaurant::get();


        $Restaurant_Menu = Restaurant_Menu::
        leftjoin('restaurant_menu_category','restaurant_menu_category.id','=','restaurant_menu.menu_cat_id')
        ->select('restaurant_menu.*','restaurant_menu_category.name as Category_Name','restaurant_menu_category.icon')
        ->where('Restaurant_id',$id)->get();


        $admins = Admin::get();
        return view('Restaurants.index',['Restaurants'=>$Restaurants,
                    'RestaurantsImages'=>$RestaurantsImages,
                    'Restaurant_Services'=>$Restaurant_Services,
                    'RestaurantsProducts'=>$RestaurantsProducts,
                    'Restaurant_Chefs'=>$Restaurant_Chefs,
                    'Restaurant_Menu'=>$Restaurant_Menu,
                    'Category_Restaurant_Menu'=>$Category_Restaurant_Menu,
                    'admins'=>$admins,'bg_section'=>$bg_section]);
    }
}
