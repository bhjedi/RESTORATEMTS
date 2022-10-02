<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        "message", 
        "note",
        "response",
        "user_id",
        "restaurant_id"
         
         
        
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id','id');

    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');

    }
}
