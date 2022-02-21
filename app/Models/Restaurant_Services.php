<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant_Services extends Model
{
    use HasFactory;
    public $table= 'restaurant_services';
    protected $fillable =['id','services_name','services_name_ar',
                          'services_desc','services_desc_ar','icon','Restaurant_id'];
}
