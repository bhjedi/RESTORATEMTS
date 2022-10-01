<?php

namespace App\Models;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        
    ];

    public function restaurants(){
        return $this->hasMany(Restaurant::class,'city_id','id');

    }
    public function getCities(): LengthAwarePaginator
    {
        return  $this->all(); 
            
    }


}
