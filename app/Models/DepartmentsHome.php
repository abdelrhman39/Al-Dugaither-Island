<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentsHome extends Model
{
    use HasFactory;
    public $table= 'departments';
    protected $fillable= ['id','image','department','department_ar','desc_department','desc_department_ar'];
}
