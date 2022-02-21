<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Admin;
use App\Models\RestaurantsProducts;
use App\Models\Restaurants;
use App\Models\AboutHome;
use App\Models\Fitness_Room_Header;
use App\Models\Parking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::leftjoin('sessions','sessions.user_id','=','users.id')
        ->select('users.*','sessions.user_id','sessions.last_activity')->get();
        $Products = RestaurantsProducts::get();
        $Restaurants = Restaurants::get();
        $views = AboutHome::get();
        $Fitness_Room_views = Fitness_Room_Header::get();
        $Parking = Parking::get();

        // dd($users);
        return view('admin.dashboard',['users'=>$users,'Products'=>$Products,
                    'Restaurants'=>$Restaurants,'views'=>$views,
                    'Fitness_Room_views'=>$Fitness_Room_views,'Parking'=>$Parking]);
    }

    public function Add_Admin(Request $request){

        // dd($request);
        $validated = Validator::make($request->all(),[
            'Admin_name'=> 'required',
            'Admin_email' => 'required}|email',
            'Admin_password' => 'required|min:8',
            'is_super' => 'required|min:0|max:1',
        ]);

        $result = Admin::create([
            'name'=> $request->Admin_name,
            'email' => $request->Admin_email,
            'password' => bcrypt($request->Admin_password),
            'is_super' => $request->is_super
        ]);
        if($result){
            return redirect()->back()->with(['success'=>'Added succssfuly']);
        }else{
            return redirect()->back()->with(['error'=>' worning , Plase Try Agin.']);
        }
    }

    public function all_Admins(){
        $All_Admins = Admin::where('id','>','1')->get();
        return view('admin.admin',['All_Admins'=>$All_Admins]);
    }

    public function Delete_Admin($id){
        $result = admin::where('id',$id)->delete();

        if($result){
            return redirect()->back()->with(['success'=>'Deleted succssfuly']);
        }else{
            return redirect()->back()->with(['error'=>' worning , Plase Try Agin.']);
        }
    }

    public function Edit_And_Update_Admin($id,Request $request){
        $id_edit = admin::where('id',$id)->first();

        $validated = Validator::make($request->all(),[
            'Admin_name'=> 'required',
            'Admin_email' => 'required}|email',
            'Admin_password' => 'required|min:8',
            'is_super' => 'required',
        ]);

        $result = Admin::where('id',$id)->update([
            'name'=> $request->Admin_name,
            'email' => $request->Admin_email,
            'password' => bcrypt($request->Admin_password),
            'is_super' => $request->is_super
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }

    }


    public function Edit_And_Update_Super_Admin_profile($id,Request $request){
        $id_edit = admin::where('id',$id)->first();

        $validated = Validator::make($request->all(),[
            'Admin_name'=> 'required',
            'Admin_email' => 'required}|email',
            'Admin_password' => 'required|min:8',
        ]);

        $result = Admin::where('id',$id)->update([
            'name'=> $request->Admin_name,
            'email' => $request->Admin_email,
            'password' => bcrypt($request->Admin_password),
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }

    }
}
