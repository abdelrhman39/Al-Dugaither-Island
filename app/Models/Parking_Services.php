<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking_Services extends Model
{
    use HasFactory;
    public $table='parking_services';
    protected $fillable = ['id','icon','serv_name','serv_name_ar','serv_desc','serv_desc_ar'];
}
