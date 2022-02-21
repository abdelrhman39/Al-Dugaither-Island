<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryHome extends Model
{
    use HasFactory;
    public $table ='galleryHome';
    protected $fillable = ['id','image'];
}
