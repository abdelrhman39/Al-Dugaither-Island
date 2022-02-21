<?php

namespace App\Http\Controllers\admin;
use Validator;
use Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function delete_user($id){

        $result = User::where('id',$id)->delete();
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }
}
