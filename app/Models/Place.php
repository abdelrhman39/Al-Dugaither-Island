<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $table = "places";

    public function scopeSelection($query){

        return $query->select('places.id', 'places.name_ar', 'places.name_en', 'places.logo', 'places.cover', 'places.description', 'places.phone', 'places.email', 'places.address', 'places.latitude', 'places.longitude',
                            'places.price_range', 'places.website', 'places.Facebook', 'places.Twitter', 'places.Instagram', 'places.WhatsApp', 'places.video', 'places.views', 'places.360Image as image360',
                            'places.location_id', 'locations.name as location_name' , 'places.Category_id', 'category.name as Category_name' , 'places.user_id', 'places.features', 'places.state', 'places.created_at')
                     ->join('locations' , 'places.location_id' ,'=', 'locations.id')
                     ->join('category' , 'places.Category_id' ,'=', 'category.id');
    }

}
