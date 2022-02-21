<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnersHome extends Model
{
    use HasFactory;
    public $table='partnersHome';
    protected $fillable = ['id','logo'];
}
