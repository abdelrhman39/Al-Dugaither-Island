<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantsProducts extends Model
{
    use HasFactory;
    public $table= 'products';
    protected $fillable =['id','image','product_name','product_name_ar',
                          'product_description','product_description_ar','price','Restaurant_id'];

}
