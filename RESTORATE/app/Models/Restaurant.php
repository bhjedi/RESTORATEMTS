<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", 
        "user_id",
         "city_id",
        
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');

    }
    public function city(){
        return $this->belongsTo(City::class,'city_id','id');

    }
    public function medias(){
        return $this->hasMany(Media::class,'restaurant_id','id');

    }
    public function reviews(){
        return $this->belongsTo(Review::class,'restaurant_id','id');

    }
    
}
