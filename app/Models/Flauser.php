<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flauser extends Model
{

    public $timestamps = false;
    
    protected $fillable = [
        'username',
        'email',
        'password',
        'is_email_confirmed',
        'joined_at',
    ];
}
