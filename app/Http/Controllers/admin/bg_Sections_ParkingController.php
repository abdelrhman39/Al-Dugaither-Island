<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bg_sections_parking;


class bg_Sections_ParkingController extends Controller
{
    public function bg_sections_Parking(){

        $bg_Sections = bg_sections_parking::first();

        return view('admin.Parking.bg_sections');
    }

    public function Update_dabg_sections_Parking(Request $request){
        $id = bg_sections_parking::first();
        $result = bg_sections_parking::where('id',$id->id)->update([
            $request->bg_section =>  $request->color,
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }
}
