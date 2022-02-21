<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderHomeContent extends Model
{
    use HasFactory;
    public $table ="HeaderHomeContent";
    protected $fillable =['id','welcome','text_More','vedio','text_under_question','created_at','updated_at'];
}
