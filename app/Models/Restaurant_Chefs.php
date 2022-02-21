<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant_Chefs extends Model
{
    use HasFactory;
    public $table= 'restaurant_chefs';
    protected $fillable =['id','image','chef_name','chef_name_ar',
                          'Specialization','Specialization_ar',
                          'facebook','twitter','insta','Restaurant_id'];
}