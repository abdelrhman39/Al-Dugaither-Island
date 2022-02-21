<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ParkingController;
use App\Http\Controllers\site\HomeSiteController;
use App\Http\Controllers\admin\RestaurantsController;
use App\Http\Controllers\admin\Fitness_RoomController;
use App\Http\Controllers\Parking\ShowParkingController;
use App\Http\Controllers\Restaurants\ShowRestaurantsController;
use App\Http\Controllers\Fitness_Room\ShowFitness_RoomController;
use App\Models\AboutHome;
use App\Http\Controllers\bg_SectionsSiteController;
use App\Http\Controllers\Fitness_Room\bg_SectionsFitnessController;
use App\Http\Controllers\admin\bg_Sections_ParkingController;
use App\Http\Controllers\admin\bg_Sections_RestaurantController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','site\HomeSiteController@index');
Route::get('index','site\HomeSiteController@index');
Route::get('Home','site\HomeSiteController@index');
Route::get('home','site\HomeSiteController@index');



Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('profile.show');
})->name('dashboard');

Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
    // Start Home Page
	Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard_admin');
    Route::get('delete_user/{id}',[UserController::class,'delete_user'])->name('admin.delete_user');

    Route::get('HeaderHome',[HomeController::class,'HeaderHome'])->name('admin.HeaderHome');
    Route::post('HeaderHome',[HomeController::class,'HeaderHome_update'])->name('admin.HeaderHome_update');

    Route::post('QuestionHome_update',[HomeController::class,'QuestionHome_update'])->name('admin.QuestionHome_update');


    Route::get('AboutHome',[HomeController::class,'AboutHome'])->name('admin.AboutHome');
    Route::post('AboutHome',[HomeController::class,'AboutHome_update'])->name('admin.AboutHome_update');

    Route::get('ServicesHome',[HomeController::class,'ServicesHome'])->name('admin.ServicesHome');
    Route::post('ServicesHome',[HomeController::class,'AddServicesHome'])->name('admin.AddServicesHome');
    Route::post('Delete_ServicesHome/{id}',[HomeController::class,'Delete_ServicesHome'])->name('admin.Delete_ServicesHome');
    Route::post('Edit_And_Update_ServicesHome/{id}',[HomeController::class,'Edit_And_Update_ServicesHome'])->name('admin.Edit_And_Update_ServicesHome');



    Route::get('DepartmentsHome',[HomeController::class,'DepartmentsHome'])->name('admin.DepartmentsHome');
    Route::post('DepartmentsHome',[HomeController::class,'AddDepartmentsHome'])->name('admin.AddDepartmentsHome');
    Route::post('Delete_DepartmentsHome/{id}',[HomeController::class,'Delete_DepartmentsHome'])->name('admin.Delete_DepartmentsHome');
    Route::post('Edit_And_Update_DepartmentsHome/{id}',[HomeController::class,'Edit_And_Update_DepartmentsHome'])->name('admin.Edit_And_Update_DepartmentsHome');



    Route::get('ProposalsAmaleedHome',[HomeController::class,'ProposalsAmaleedHome'])->name('admin.ProposalsAmaleedHome');
    Route::post('ProposalsAmaleedHome',[HomeController::class,'AddProposalsAmaleedsHome'])->name('admin.AddProposalsAmaleedHome');
    Route::post('Delete_ProposalsAmaleedHome/{id}',[HomeController::class,'Delete_ProposalsAmaleedHome'])->name('admin.Delete_ProposalsAmaleedHome');
    Route::post('Edit_And_Update_ProposalsAmaleedHome/{id}',[HomeController::class,'Edit_And_Update_ProposalsAmaleedHome'])->name('admin.Edit_And_Update_ProposalsAmaleedHome');


    Route::get('GalleryHome',[HomeController::class,'GalleryHome'])->name('admin.GalleryHome');
    Route::post('AddGalleryHome',[HomeController::class,'AddGalleryHome'])->name('admin.AddGalleryHome');
    Route::post('Delete_AddGalleryHome/{id}',[HomeController::class,'Delete_AddGalleryHome'])->name('admin.Delete_AddGalleryHome');


    Route::get('ContactUsHome',[HomeController::class,'ContactUsHome'])->name('admin.ContactUsHome');
    Route::post('ContactUsHome',[HomeController::class,'ContactUsHome_update'])->name('admin.ContactUsHome_update');



    Route::get('PartnersHome',[HomeController::class,'PartnersHome'])->name('admin.PartnersHome');
    Route::post('PartnersHome',[HomeController::class,'AddPartnersHome'])->name('admin.AddPartnersHome');
    Route::post('Delete_PartnersHome/{id}',[HomeController::class,'Delete_PartnersHome'])->name('admin.Delete_PartnersHome');






    Route::group(['prefix' => 'icons'], function () {
        Route::get('Feather', function(){
            return view('admin.icons.Feather_incon');
        })->name('admin.icons.Feather_incon');

        Route::get('Line_Awesome', function(){
            return view('admin.icons.Line_Awesome');
        })->name('admin.icons.Line_Awesome');

        Route::get('Meteocons', function(){
            return view('admin.icons.Meteocons');
        })->name('admin.icons.Meteocons');

        Route::get('Simple_Line_Icons', function(){
            return view('admin.icons.Simple_Line_Icons');
        })->name('admin.icons.Simple_Line_Icons');
    });


    Route::get('all-restaurants',[RestaurantsController::class,'all_restaurants'])->name('admin.all_restaurants.show');
    Route::post('add_restaurants',[RestaurantsController::class,'add_restaurants'])->name('admin.add_restaurants');
    Route::post('delete_restaurants/{id}',[RestaurantsController::class,'delete_restaurants'])->name('admin.delete_restaurants');
    Route::post('update_restaurants/{id}',[RestaurantsController::class,'update_restaurants'])->name('admin.update_restaurants');


    Route::post('Add_Image_restaurants/{id}',[RestaurantsController::class,'Add_Image_restaurants'])->name('admin.Add_Image_restaurants');
    Route::post('delete_Image_restaurants/{id}',[RestaurantsController::class,'delete_Image_restaurants'])->name('admin.delete_Image_restaurants');

    Route::get('delete_Services_restaurants/{id}',[RestaurantsController::class,'delete_Services_restaurants'])->name('admin.delete_Services_restaurants');
    Route::post('Edit_And_Update_ServicesRestaurant/{id}',[RestaurantsController::class,'Edit_And_Update_ServicesRestaurant'])->name('admin.Edit_And_Update_ServicesRestaurant');
    Route::post('Add_Services_Restaurants',[RestaurantsController::class,'Add_Services_Restaurants'])->name('admin.Add_Services_Restaurants');


    Route::post('Add_Products_Restaurants',[RestaurantsController::class,'Add_Products_Restaurants'])->name('admin.Add_Products_Restaurants');
    Route::get('delete_Products_restaurants/{id}',[RestaurantsController::class,'delete_Products_restaurants'])->name('admin.delete_Products_restaurants');
    Route::post('Edit_And_Update_ProductsRestaurant/{id}',[RestaurantsController::class,'Edit_And_Update_ProductsRestaurant'])->name('admin.Edit_And_Update_ProductsRestaurant');


    Route::post('Add_Chefs_Restaurants',[RestaurantsController::class,'Add_Chefs_Restaurants'])->name('admin.Add_Chefs_Restaurants');
    Route::get('delete_Chefs_restaurants/{id}',[RestaurantsController::class,'delete_Chefs_restaurants'])->name('admin.delete_Chefs_restaurants');
    Route::post('Edit_And_Update_ChefsRestaurant/{id}',[RestaurantsController::class,'Edit_And_Update_ChefsRestaurant'])->name('admin.Edit_And_Update_ChefsRestaurant');



    Route::post('Add_Menu_Restaurants',[RestaurantsController::class,'Add_Menu_Restaurants'])->name('admin.Add_Menu_Restaurants');
    Route::get('delete_Menu_restaurants/{id}',[RestaurantsController::class,'delete_Menu_restaurants'])->name('admin.delete_Menu_restaurants');
    Route::post('Edit_And_Update_MenuRestaurant/{id}',[RestaurantsController::class,'Edit_And_Update_MenuRestaurant'])->name('admin.Edit_And_Update_MenuRestaurant');


    Route::get('all_Admins',[AdminController::class,'all_Admins'])->name('admin.all_Admins');
    Route::post('Add_Admin',[AdminController::class,'Add_Admin'])->name('admin.Add_Admin');
    Route::post('Delete_Admin/{id}',[AdminController::class,'Delete_Admin'])->name('admin.Delete_Admin');
    Route::post('Edit_And_Update_Admin/{id}',[AdminController::class,'Edit_And_Update_Admin'])->name('admin.Edit_And_Update_Admin');

    Route::post('Edit_And_Update_Super_Admin_profile/{id}',[AdminController::class,'Edit_And_Update_Super_Admin_profile'])->name('admin.Edit_And_Update_Super_Admin_profile');

///////////////////// Start Fitness_Room /////////////////////////

Route::get('Fitness_Room',[Fitness_RoomController::class,'index'])->name('admin.Fitness_Room');
Route::post('Fitness_Room_headr_update',[Fitness_RoomController::class,'Fitness_Room_headr_update'])->name('admin.Fitness_Room_headr_update');
Route::post('Fitness_Room_section2_update',[Fitness_RoomController::class,'Fitness_Room_section2_update'])->name('admin.Fitness_Room_section2_update');

Route::post('Fitness_Room_Services_Add',[Fitness_RoomController::class,'Fitness_Room_Services_Add'])->name('admin.Fitness_Room_Services_Add');
Route::get('Fitness_Room_Services_delete/{id}',[Fitness_RoomController::class,'Fitness_Room_Services_delete'])->name('admin.Fitness_Room_Services_delete');


Route::post('Fitness_Room_Levels_Add',[Fitness_RoomController::class,'Fitness_Room_Levels_Add'])->name('admin.Fitness_Room_Levels_Add');
Route::get('Fitness_Room_Levels_delete/{id}',[Fitness_RoomController::class,'Fitness_Room_Levels_delete'])->name('admin.Fitness_Room_Levels_delete');


Route::post('Fitness_Room_Stories_Add',[Fitness_RoomController::class,'Fitness_Room_Stories_Add'])->name('admin.Fitness_Room_Stories_Add');
Route::get('Fitness_Room_Stories_delete/{id}',[Fitness_RoomController::class,'Fitness_Room_Stories_delete'])->name('admin.Fitness_Room_Stories_delete');


Route::post('Fitness_Room_ContactUs_update',[Fitness_RoomController::class,'Fitness_Room_ContactUs_update'])->name('admin.Fitness_Room_ContactUs_update');

////////////////////// Ebd Fitness_Room //////////////////////////

//////////////////////  Start Parking /////////////////////

Route::get('Parking',[ParkingController::class,'index'])->name('admin.Parking');

Route::post('Parking_Add',[ParkingController::class,'Parking_Add'])->name('admin.Parking_Add');
Route::get('Parking_delete/{id}',[ParkingController::class,'Parking_delete'])->name('admin.Parking_delete');
Route::post('Parking_Services_Add',[ParkingController::class,'Parking_Services_Add'])->name('admin.Parking_Services_Add');
Route::get('Parking_Services_delete/{id}',[ParkingController::class,'Parking_Services_delete'])->name('admin.Parking_Services_delete');
Route::post('Parking_AboutUs_update',[ParkingController::class,'Parking_AboutUs_update'])->name('admin.Parking_AboutUs_update');



Route::get('bg_sections_HomePage',[bg_SectionsSiteController::class,'bg_sections_HomePage'])->name('admin.bg_sections_HomePage');
Route::post('Update_dabg_sections_HomePage',[bg_SectionsSiteController::class,'Update_dabg_sections_HomePage'])->name('admin.Update_dabg_sections_HomePage');


Route::get('bg_sections_Fitness_Room',[bg_SectionsFitnessController::class,'bg_sections_Fitness_Room'])->name('admin.bg_sections_Fitness_Room');
Route::post('Update_dabg_sections_Fitness_Room',[bg_SectionsFitnessController::class,'Update_dabg_sections_Fitness_Room'])->name('admin.Update_dabg_sections_Fitness_Room');


Route::get('bg_sections_Restaurant',[bg_Sections_RestaurantController::class,'bg_sections_Restaurant'])->name('admin.bg_sections_Restaurant');
Route::post('Update_dabg_sections_Restaurant',[bg_Sections_RestaurantController::class,'Update_dabg_sections_Restaurant'])->name('admin.Update_dabg_sections_Restaurant');

Route::get('bg_sections_Parking',[bg_Sections_ParkingController::class,'bg_sections_Parking'])->name('admin.bg_sections_Parking');
Route::post('Update_dabg_sections_Parking',[bg_Sections_ParkingController::class,'Update_dabg_sections_Parking'])->name('admin.Update_dabg_sections_Parking');


});




Route::get('Restaurant{id}/{Restaurant_name}',[ShowRestaurantsController::class,'index'])->name('show.Restaurant');
Route::get('Restaurant{id}',[ShowRestaurantsController::class,'index'])->name('show.Restaurant');

Route::post('send-mail',[RestaurantsController::class,'send_mail'])->name('send_mail');


Route::get('Fitnes_Room',[ShowFitness_RoomController::class,'index']);


Route::get('_Parking',[ShowParkingController::class,'index']);
Route::post('order_Parking',[ShowParkingController::class,'order_Parking'])->name('order_Parking');
