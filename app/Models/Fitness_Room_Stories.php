<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_Room_Stories extends Model
{
    use HasFactory;
    public $table ='fitness_room_stories';
    protected $fillable = ['id','user_name','user_name_ar','user_img','text_view','text_view_ar'];
}
