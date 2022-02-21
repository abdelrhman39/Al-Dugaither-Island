<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bg_Sections_Restaurant extends Model
{
    use HasFactory;
    public $table = 'bg_sections_Restaurant';

    public $fillable = ['id','section2','section3','section4','section5','section6','section7','section8','section_footer'];
}
