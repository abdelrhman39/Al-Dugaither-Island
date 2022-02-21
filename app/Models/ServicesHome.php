<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesHome extends Model
{
    use HasFactory;
    public $table= 'services';
    protected $fillable =['id','services_name','services_name_ar','services_desc','services_desc_ar','icon','created_at','updated_at'];
}
