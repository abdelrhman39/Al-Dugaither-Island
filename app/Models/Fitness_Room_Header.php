<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_Room_Header extends Model
{
    use HasFactory;
    public $table ='fitness_room_header';
    protected $fillable = ['id','image','fitness_room_name',
    'fitness_room_name_ar','text_head_anim1','text_head_anim1_ar',
    'text_head_anim2','text_head_anim2_ar',
    'text_head_anim3','text_head_anim3_ar','text_more','text_more_ar'];
}
