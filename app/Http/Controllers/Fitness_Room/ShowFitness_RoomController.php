<?php

namespace App\Http\Controllers\Fitness_Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Fitness_Room_Header;
use App\Models\Fitness_Room_Images;
use App\Models\Fitness_Room_Levels;
use App\Models\Fitness_Room_Section2;
use App\Models\Fitness_Room_Services;
use App\Models\Fitness_Room_Stories;
use App\Models\Fitness_Room_ContactUs;
use App\Models\bg_Sections_Fitness_Room;


class ShowFitness_RoomController extends Controller
{
    public function index(){
        Fitness_Room_Header::where('id',1)->increment('views');
        $Fitness_Room_Header = Fitness_Room_Header::first();
        $Fitness_Room_Section2 = Fitness_Room_Section2::first();
        $Fitness_Room_Images = Fitness_Room_Images::get();
        $Fitness_Room_Services = Fitness_Room_Services::get();
        $Fitness_Room_Levels = Fitness_Room_Levels::get();
        $Fitness_Room_Stories = Fitness_Room_Stories::get();

        $Fi_Room_Services = Fitness_Room_Services::get();

        $Fitness_Room_ContactUs = Fitness_Room_ContactUs::first();

        $bg_section = bg_Sections_Fitness_Room::get();



        return view('Fitness_Room.index',['Fitness_Room_Header'=>$Fitness_Room_Header,
                        'Fitness_Room_Section2'=>$Fitness_Room_Section2,
                        'Fitness_Room_Images'=>$Fitness_Room_Images,
                        'Fitness_Room_Levels'=>$Fitness_Room_Levels,
                        'Fitness_Room_Services',$Fitness_Room_Services,
                        'Fitness_Room_Stories'=>$Fitness_Room_Stories,
                        'Fi_Room_Services'=>$Fi_Room_Services,
                        'Fitness_Room_ContactUs'=>$Fitness_Room_ContactUs,
                    'bg_section'=>$bg_section]);
    }
}
