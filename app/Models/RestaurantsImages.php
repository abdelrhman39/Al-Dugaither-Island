<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantsImages extends Model
{
    use HasFactory;
    public $table= 'restaurant_images';
    protected $fillable =['id','image','Restaurant_id'];
}
