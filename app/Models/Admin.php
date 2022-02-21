<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;

        protected $table = 'admins';
        protected $guarded = array();

        protected $fillable = [
            'name', 'email', 'password',
        ];

    /**
         * The attributes that should be hidden for serialization.
         *
         * @var array
    */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];



}
