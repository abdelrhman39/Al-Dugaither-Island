<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant_Menu extends Model
{
    use HasFactory;
    public $table= 'restaurant_menu';
    protected $fillable =['id','product_name','product_name_ar',
                          'image','description','description_ar',
                          'price','menu_cat_id','Restaurant_id'];
}
