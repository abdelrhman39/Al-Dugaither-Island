<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUsHome extends Model
{
    use HasFactory;
    public $table ='ContactUsHome';
    protected $fillable =['id','location_map','location_address','location_address_ar',
                            'email','phone','facebook','twitter','insta',
                            'linkedin','whatsapp'];
}
