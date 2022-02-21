<?php

namespace App\Http\Controllers\Fitness_Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bg_Sections_Fitness_Room;


class bg_SectionsFitnessController extends Controller
{
    public function bg_sections_Fitness_Room(){

        $bg_Sections = bg_Sections_Fitness_Room::first();

        return view('admin.Fitness_Room.bg_sections');
    }

    public function Update_dabg_sections_Fitness_Room(Request $request){
        $id = bg_Sections_Fitness_Room::first();
        $result = bg_Sections_Fitness_Room::where('id',$id->id)->update([
            $request->bg_section =>  $request->color,
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }

    }
}
