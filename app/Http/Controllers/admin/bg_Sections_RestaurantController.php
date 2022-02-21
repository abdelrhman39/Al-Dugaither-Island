<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bg_Sections_Restaurant;


class bg_Sections_RestaurantController extends Controller
{
    public function bg_sections_Restaurant(){

        $bg_Sections = bg_Sections_Restaurant::first();

        return view('admin.restaurants.bg_sections');
    }

    public function Update_dabg_sections_Restaurant(Request $request){
        $id = bg_Sections_Restaurant::first();
        $result = bg_Sections_Restaurant::where('id',$id->id)->update([
            $request->bg_section =>  $request->color,
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }

}
