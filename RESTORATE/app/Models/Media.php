<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
   
    protected $fillable = [
        "image", 
        "restaurant_id",
         
        
    ];
    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id','id');

    }
}
