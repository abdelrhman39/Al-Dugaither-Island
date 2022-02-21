<?php

namespace App\Http\Controllers\Parking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Parking;
use App\Models\Parking_Services;
use App\Models\Parking_About_Us;
use App\Models\bg_sections_parking;


class ShowParkingController extends Controller
{
    public function index(){
        $Parking = Parking::get();
        $Parking_Services = Parking_Services::get();
        $Parking_About_Us = Parking_About_Us::first();
        $bg_section = bg_sections_parking::get();

        return view('Parking.index', ['Parking'=>$Parking,
                            'Parking_Services'=>$Parking_Services,
                            'Parking_About_Us'=>$Parking_About_Us,
                            'bg_section'=>$bg_section]);
    }

    public function order_Parking(Request $request){
        $Parking_About_Us = Parking_About_Us::first();

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'Description_Order' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'Description_Order' -> $request->Description_Order,
        ];

        $result = Mail::to($Parking_About_Us->email)->send(new ContacttMail($details));
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Email is Sent succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }
}
