<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Restaurant_Menu extends Model
{
    use HasFactory;
    public $table= 'restaurant_menu_category';
    protected $fillable =['id','name','icon'];
}
