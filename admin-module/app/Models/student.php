<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'roll_no',
        'semester',
        'user_id',
        'username',
        'profile_pic',
        'about',
        
        'is_approved'
        

    ];


    public function user(){
        return $this->belongsTo('\App\User');
    }
}
