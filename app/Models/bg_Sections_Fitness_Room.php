<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bg_Sections_Fitness_Room extends Model
{
    use HasFactory;
    public $table = 'bg_sections_Fitness_Room';

    public $fillable = ['id','section2','section3','section4','section5','section_footer'];
}
