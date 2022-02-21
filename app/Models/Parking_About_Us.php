<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking_About_Us extends Model
{
    use HasFactory;
    public $table='parking_about_us';
    protected $fillable = ['id','about_desc','about_desc_ar','video','image_video',
                            'facebook','twitter','insta','email','phone'];
}

