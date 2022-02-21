<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    use HasFactory;
    public $table= 'restaurants';
    protected $fillable =['id','name','name_ar','description','description_ar',
    'main_image','main_img_bg','logo','experience','email','phone','facebook',
    'twitter','insta','linkedin','whatsapp','admin_id','created_at','updated_at'];
}
