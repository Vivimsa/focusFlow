<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected function setEmailAttribute($value){
        $this->attributes['email'] = strtolower($value);
    }

    protected $hidden = [
      'password',
    ];
}
