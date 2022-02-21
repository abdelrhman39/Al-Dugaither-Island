<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_Room_Images extends Model
{
    use HasFactory;
    public $table ='fitness_room_images';
    protected $fillable = ['id','image'];
}
