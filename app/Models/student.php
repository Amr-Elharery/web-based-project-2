<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
        'full_name',
        'user_name',
        'email',
        'password',
        'phone',
        'whatsapp_number',
        'address',
        'user_image',
    ];

    protected $hidden = [
        'password',
    ];
}
