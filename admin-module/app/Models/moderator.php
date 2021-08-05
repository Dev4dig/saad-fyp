<?php

namespace App\Models;

use illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticateable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moderator extends Authenticateable
{
    //use Notifiable;
    protected $gaurd = 'moderators';

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'profile_pic',
        'about',
        'role'
        

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    use HasFactory;
}
