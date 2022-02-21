<?php

namespace App\Http\Controllers\site;

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
use App\Models\PartnersHome;
use App\Models\ContactUsHome;
use App\Models\bg_sections_HomePage;
use Mail;

class HomeSiteController extends Controller
{
    public function index()
    {
        AboutHome::where('id',1)->increment('views');

        $HeaderHomeContent = HeaderHomeContent::get();
        $AboutHome = AboutHome::get();
        $QuestionHome = QuestionHome::get();
        $ServicesHome= ServicesHome::get();
        $DepartmentsHome = DepartmentsHome::get();
        $ProposalsAmaleed = ProposalsAmaleed::get();
        $GalleryHome = GalleryHome::get();
        $PartnersHome = PartnersHome::get();
        $ContactUsHome = ContactUsHome::get();
        $bg_sections_HomePage = bg_sections_HomePage::get();

        return view('Home.index',[
            'Header'=>$HeaderHomeContent,
            'Question'=>$QuestionHome,
            'About'=>$AboutHome,
            'Services'=>$ServicesHome,
            'Departments'=>$DepartmentsHome,
            'ProposalsAmaleed'=>$ProposalsAmaleed,
            'Partners' =>$PartnersHome,
            'Gallery'=>$GalleryHome,
            'ContactUs'=>$ContactUsHome,
            'bg_section' => $bg_sections_HomePage,
        ]);

    }
}
