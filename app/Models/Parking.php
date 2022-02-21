<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    public $table='parking';
    protected $fillable = ['id','parking_name','parking_name_ar','parking_desc','parking_desc_ar','parking_img'];
}
