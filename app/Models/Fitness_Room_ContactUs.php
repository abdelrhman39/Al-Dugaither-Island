<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_Room_ContactUs extends Model
{
    use HasFactory;
    public $table ='fitness_room_contactUs';
    protected $fillable = ['id','site_description','site_description_ar',
    'facebook','twitter','insta','phone','email'];
}

