<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_Room_Section2 extends Model
{
    use HasFactory;
    public $table ='fitness_room_section2';
    protected $fillable = ['id','image','text_head','text_head_ar',
    'text_more','text_more_ar', 'serv1_text',
    'serv1_text_ar','serv2_text','serv2_text_ar',
    'serv3_text','serv3_text_ar','serv4_text','serv4_text_ar',
    'serv5_text','serv5_text_ar'];
}
