<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_Room_Services extends Model
{
    use HasFactory;
    public $table ='fitness_room_services';
    protected $fillable = ['id','icon','text_head','text_head_ar','text_desc','text_desc_ar'];
}
