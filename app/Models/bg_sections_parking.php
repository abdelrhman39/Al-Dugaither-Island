<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bg_sections_parking extends Model
{
    use HasFactory;
    public $table = 'bg_sections_parking';

    public $fillable = ['id','section1','section2','section3','section4','section_footer'];
}
