<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bg_sections_HomePage;


class bg_SectionsSiteController extends Controller
{
    public function bg_sections_HomePage(){

        $bg_sections_HomePage = bg_sections_HomePage::first();

        return view('admin.Home.bg_sections');
    }

    public function Update_dabg_sections_HomePage(Request $request){
        $id = bg_sections_HomePage::first();
        $result = bg_sections_HomePage::where('id',$id->id)->update([
            $request->bg_section =>  $request->color,
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }

    }
}
