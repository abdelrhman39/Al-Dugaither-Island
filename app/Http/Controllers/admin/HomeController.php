<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Session;
use App\Models\HeaderHomeContent;
use App\Models\AboutHome;
use App\Models\QuestionHome;
use File;
use App\Models\ServicesHome;
use App\Models\DepartmentsHome;
use App\Models\ProposalsAmaleed;
use App\Models\GalleryHome;
use App\Models\ContactUsHome;
use App\Models\PartnersHome;
use Mail;



class HomeController extends Controller
{
    // Start Header
    public function HeaderHome(){
        $HeaderHomeContent = HeaderHomeContent::first();
        $QuestionHome= QuestionHome::first();
        return view('admin.Home.header',['HeaderHomeContent'=>$HeaderHomeContent,'QuestionHome'=>$QuestionHome]);
    }

    public function HeaderHome_update(Request $request){
        $result = HeaderHomeContent::where('id',$request->id_header)->update([
            'welcome'=> $request->welcome,
            'welcome_ar'=> $request->welcome_ar,
            'text_More'=> $request->text_More,
            'text_More_ar'=> $request->text_More_ar,
            'vedio'=> $request->vedio,
            'text_under_question'=> $request->text_under_question,
            'text_under_question_ar'=> $request->text_under_question_ar,
        ]);
        if($result){
            return redirect()->back()->with(['success'=>'Updated succssfuly']);
        }else{
            return redirect()->back()->with(['error'=>' wrong.']);
        }
    }

    public function QuestionHome_update(Request $request){
        $result = QuestionHome::where('id',$request->id_header)->update([
            'answer'=> $request->answer,
            'answer_ar'=> $request->answer_ar,
            'text_under_question'=> $request->text_under_question,
            'text_under_question_ar'=> $request->text_under_question_ar,
            'serv1_head'=> $request->serv1_head,
            'serv1_head_ar'=> $request->serv1_head_ar,
            'serv1_text'=> $request->serv1_text,
            'serv1_text_ar'=> $request->serv1_text_ar,
            'serv2_head'=> $request->serv2_head,
            'serv2_head_ar'=> $request->serv2_head_ar,
            'serv2_text'=> $request->serv2_text,
            'serv2_text_ar'=> $request->serv2_text_ar,
            'serv3_head'=> $request->serv3_head,
            'serv3_head_ar'=> $request->serv3_head_ar,
            'serv3_text'=> $request->serv3_text,
            'serv3_text_ar'=> $request->serv3_text_ar,
        ]);
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }
    // End Header

    // Start About
    public function AboutHome(){
        $AboutHome = AboutHome::first();
        return view('admin.Home.about',['AboutHome'=>$AboutHome]);
    }

    public function AboutHome_update(Request $request){
        $updete = AboutHome::where('id',$request->id_header)->first();

        if($request->hasFile('image')){
            file::delete('uploads/about/'.$updete->image);
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/about/';
            $final = $img->move($path,$newName);
            $image = $newName;
        }else{
            $image = $updete->image;
        }

        if($request->hasFile('logo_company')){
            file::delete('uploads/about/'.$updete->logo_company);
            $img = $request->file('logo_company');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/about/';
            $final = $img->move($path,$newName);
            $logo_company = $newName;
        }else{
            $logo_company = $updete->logo_company;
        }

        $result = AboutHome::where('id',$request->id_header)->update([
            'text_head'=> $request->text_head,
            'text_head_ar'=> $request->text_head_ar,
            'text_more'=> $request->text_more,
            'text_more_ar'=> $request->text_more_ar,
            'serv1_head'=> $request->serv1_head,
            'serv1_head_ar'=> $request->serv1_head_ar,
            'serv1_text'=> $request->serv1_text,
            'serv1_text_ar'=> $request->serv1_text_ar,
            'serv2_head'=> $request->serv2_head,
            'serv2_head_ar'=> $request->serv2_head_ar,
            'serv2_text'=> $request->serv2_text_ar,
            'serv2_text_ar'=> $request->serv2_text_ar,
            'serv3_head'=> $request->serv3_head,
            'serv3_head_ar'=> $request->serv3_head_ar,
            'serv3_text'=> $request->serv3_text_ar,
            'serv3_text_ar'=> $request->serv3_text_ar,
            'vedio_link' => $request->vedio_link,
            'image'=>$image,
            'logo_company'=>$logo_company
        ]);



        if($result){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning')]);
        }
    }
    // End About

    // Start Services
    public function ServicesHome(){
        $ServicesHome = ServicesHome::get();
        return view('admin.Home.services.show',['ServicesHome'=>$ServicesHome]);
    }
    public function AddServicesHome(Request $request){
        $ServicesHome = ServicesHome::get();
        $result = ServicesHome::create([
            'services_name'=> $request->services_name,
            'services_name_ar'=> $request->services_name_ar,
            'services_desc'=> $request->services_desc,
            'services_desc_ar'=> $request->services_desc_ar,
            'icon'=> $request->icon,
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly'),'ServicesHome'=>$ServicesHome]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'ServicesHome'=>$ServicesHome]);
        }
    }

    public function Delete_ServicesHome($id){
        $ServicesHome = ServicesHome::get();
        $result = ServicesHome::where('id',$id)->delete();
        if($result){
            return redirect()->back()->with(['success'=> __("admin.Deleted succssfuly"),'ServicesHome'=>$ServicesHome]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning') ,'ServicesHome'=>$ServicesHome]);
        }
    }

    public function Edit_And_Update_ServicesHome($id, Request $request){
        $ServicesHome = ServicesHome::get();
        $result_edit = ServicesHome::where('id',$request->id)->update([
            'services_name'=> $request->services_name,
            'services_name_ar'=> $request->services_name_ar,
            'services_desc'=> $request->services_desc,
            'services_desc_ar'=> $request->services_desc_ar,
            'icon'=> $request->icon,
        ]);
        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly'),'ServicesHome'=>$ServicesHome]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning') ,'ServicesHome'=>$ServicesHome]);
        }
    }

////////////////////////////////////////
    public function DepartmentsHome()
    {
        $DepartmentsHome = DepartmentsHome::get();
        return view('admin.Home.departments',['DepartmentsHome'=>$DepartmentsHome]);
    }

    public function AddDepartmentsHome(Request $request){
        $DepartmentsHome = DepartmentsHome::get();

        if($request->hasFile('image')){
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/department/';
            $final = $img->move($path,$newName);
            $image = $newName;
        }

        $result = DepartmentsHome::create([
            'department'=> $request->department,
            'department_ar'=> $request->department_ar,
            'desc_department'=> $request->desc_department,
            'desc_department_ar'=> $request->desc_department,
            'image'=> $image,
            'link' =>$request->link,
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly'),'DepartmentsHome'=>$DepartmentsHome]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'DepartmentsHome'=>$DepartmentsHome]);
        }
    }

    public function Delete_DepartmentsHome($id){
        $DepartmentsHome = DepartmentsHome::get();
        $del = DepartmentsHome::where('id',$id)->first();

        if(file_exists('uploads/department/'.$del->image)){
            $deleted = file::delete('uploads/department/'.$del->image);
        }

        if($deleted){
            $result = DepartmentsHome::where('id',$id)->delete();
        }
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly'),'DepartmentsHome'=>$DepartmentsHome]);
        }else{
            return redirect()->back()->with(['error'=>__('admin.worning') ,'DepartmentsHome'=>$DepartmentsHome]);
        }
    }

    public function Edit_And_Update_DepartmentsHome($id, Request $request){
        $DepartmentsHome = DepartmentsHome::get();

        $updete = DepartmentsHome::where('id',$request->id)->first();

        if($request->hasFile('image')){
            file::delete('uploads/department/'.$updete->image);
            $img = $request->file('image');
            $extension = $img->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/department/';
            $final = $img->move($path,$newName);
            $image = $newName;
        }else{
            $image = $updete->image;
        }

        $result_edit = DepartmentsHome::where('id',$request->id)->update([
            'department'=> $request->department,
            'department_ar'=> $request->department_ar,
            'desc_department'=> $request->desc_department,
            'desc_department_ar'=> $request->desc_department_ar,
            'image'=> $image,
            'link' =>$request->link,
        ]);


        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly'),'DepartmentsHome'=>$DepartmentsHome]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'DepartmentsHome'=>$DepartmentsHome]);
        }
    }

    ///////////////////////

    public function ProposalsAmaleedHome(){
        $ProposalsAmaleed = ProposalsAmaleed::get();
        return view('admin.Home.Proposals_Amaleed',['ProposalsAmaleed'=>$ProposalsAmaleed]);
    }
    public function AddProposalsAmaleedsHome(Request $request){
        $ProposalsAmaleed = ProposalsAmaleed::get();
        $result = ProposalsAmaleed::create([
            'proposal'=> $request->proposal,
            'proposal_ar'=> $request->proposal_ar,
            'desc_proposals'=> $request->desc_proposals,
            'desc_proposals_ar'=> $request->desc_proposals_ar,
        ]);

        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly'),'ProposalsAmaleed'=>$ProposalsAmaleed]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'ProposalsAmaleed'=>$ProposalsAmaleed]);
        }
    }

    public function Delete_ProposalsAmaleedHome($id){
        $ProposalsAmaleed = ProposalsAmaleed::get();
        $result = ProposalsAmaleed::where('id',$id)->delete();
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly'),'ProposalsAmaleed'=>$ProposalsAmaleed]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'ProposalsAmaleed'=>$ProposalsAmaleed]);
        }
    }

    public function Edit_And_Update_ProposalsAmaleedHome($id, Request $request){
        $ProposalsAmaleed = ProposalsAmaleed::get();
        $result_edit = ProposalsAmaleed::where('id',$request->id)->update([
            'proposal'=> $request->proposal,
            'proposal_ar'=> $request->proposal_ar,
            'desc_proposals'=> $request->desc_proposals,
            'desc_proposals_ar'=> $request->desc_proposals_ar,
        ]);
        if($result_edit){
            return redirect()->back()->with(['success'=> __('admin.Updated succssfuly'),'ProposalsAmaleed'=>$ProposalsAmaleed]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'ProposalsAmaleed'=>$ProposalsAmaleed]);
        }
    }

    ///////////////////////////////////////

    public function GalleryHome(){
        $GalleryHome = GalleryHome::get();
        return view('admin.Home.GalleryHome',['GalleryHome'=>$GalleryHome]);
    }
    public function AddGalleryHome(Request $request){
        $GalleryHome = GalleryHome::get();
        if($request->hasFile('images')){
            foreach($request->images as $img){
                $extension = $img->extension();
                $newName= uniqid('',true).'.'.$extension;
                $path = 'uploads/GalleryHome/';
                $final = $img->move($path,$newName);
                $image = $newName;

                $result = GalleryHome::create([
                    'image'=>$image
                ]);
            }
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning') ,'GalleryHome'=>$GalleryHome]);
        }


        if($result){
            return redirect()->back()->with(['success'=> __('admin.Added succssfuly'),'GalleryHome'=>$GalleryHome]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'GalleryHome'=>$GalleryHome]);
        }
    }

    public function Delete_AddGalleryHome($id)
    {
        $GalleryHome = GalleryHome::get();
        $del = GalleryHome::where('id',$id)->first();

        if(file_exists('uploads/GalleryHome/'.$del->image)){
            $deleted = file::delete('uploads/GalleryHome/'.$del->image);
        }

        if($deleted){
            $result = GalleryHome::where('id',$id)->delete();
        }
        if($result){
            return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly'),'GalleryHome'=>$GalleryHome]);
        }else{
            return redirect()->back()->with(['error'=> __('admin.worning'),'GalleryHome'=>$GalleryHome]);
        }
    }

///////////////////////////////////////////////////


// Start ContactUsHome
public function ContactUsHome(){
    $ContactUsHome = ContactUsHome::first();
    return view('admin.Home.ContactUs',['ContactUsHome'=>$ContactUsHome]);
}

public function ContactUsHome_update(Request $request){

    $result = ContactUsHome::where('id',$request->id_header)->update([
        'location_map'=> $request->location_map,
        'location_address'=> $request->location_address,
        'location_address_ar'=> $request->location_address_ar,
        'email'=> $request->email,
        'phone'=> $request->phone,
        'facebook'=> $request->facebook,
        'twitter'=> $request->twitter,
        'insta'=> $request->linkedin,
        'linkedin'=> $request->linkedin,
        'whatsapp'=> $request->whatsapp,
    ]);

    if($result){
        return redirect()->back()->with(['success'=> __('admin.Updated succssfuly')]);
    }else{
        return redirect()->back()->with(['error'=> __('admin.worning')]);
    }
}




///////////////////////////////////////

public function PartnersHome(){
    $PartnersHome = PartnersHome::get();
    return view('admin.Home.partnersHome',['PartnersHome'=>$PartnersHome]);
}
public function AddPartnersHome(Request $request){
    $PartnersHome = PartnersHome::get();
    if($request->hasFile('logo')){
        foreach($request->logo as $logo){
            $extension = $logo->extension();
            $newName= uniqid('',true).'.'.$extension;
            $path = 'uploads/partnersHome/';
            $final = $logo->move($path,$newName);
            $logo = $newName;

            $result = PartnersHome::create([
                'logo'=>$logo
            ]);
        }
    }else{
        return redirect()->back()->with(['error'=> __('admin.worning'),'PartnersHome'=>$PartnersHome]);
    }


    if($result){
        return redirect()->back()->with(['success'=> __('admin.Added succssfuly'),'PartnersHome'=>$PartnersHome]);
    }else{
        return redirect()->back()->with(['error'=> __('admin.worning'),'PartnersHome'=>$PartnersHome]);
    }
}

public function Delete_PartnersHome($id)
{
    $PartnersHome = PartnersHome::get();
    $del = PartnersHome::where('id',$id)->first();

    if(file_exists('uploads/partnersHome/'.$del->logo)){
        $deleted = file::delete('uploads/partnersHome/'.$del->logo);
    }

    if($deleted){
        $result = PartnersHome::where('id',$id)->delete();
    }
    if($result){
        return redirect()->back()->with(['success'=> __('admin.Deleted succssfuly'),'PartnersHome'=>$PartnersHome]);
    }else{
        return redirect()->back()->with(['error'=> __('admin.worning'),'PartnersHome'=>$PartnersHome]);
    }
}

///////////////////////////////////////////////////



// public function SendMessageContactUs(Request $request)
// {

//     Mail::send('mails.mail_order_don',['total'=>$request->total,
//         'data_order'=>$data_order,'method'=>'من خلال محفظة شوارعنا'], function($message) use($request){
//         $message->to(Auth::user()->email);
//         $message->subject('تأكيد شراء منتجات من شوارعنا');
// }
// End ContactUsHome




}
