<?php

namespace App\Models;
use Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
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
        return $this->hasMany(Review::class,'restaurant_id','id');

    }

    public function getRestaut(): LengthAwarePaginator
    {
        return $this->with(["city","user","medias","reviews"])->latest()->paginate(10); 
            
    }
   
    
    public function getRestautByOwner(): LengthAwarePaginator
    {
        return $this->with(["city","user","medias","reviews"])->where("user_id",auth()->id())->latest()->paginate(10); 
            
    }

    public function getRestautFiltred(string $search=null): LengthAwarePaginator
    {
        
        return $this->with(["city","user","medias","reviews"])->whereHas('city',function($q) use($search){
            $q->where('name', 'like', '%' . $search . '%');
        })->latest()->paginate(10); 
            
    }
    public function getCity(): LengthAwarePaginator
    {
        return City::paginate(10); 
            
    }

    
    public function getRestaurantDetail($id)
    {
        
        
        
        return $this->where("id",$id)->with(["city","user","medias","reviews"])->get(); 
            
    }

    public function CheckIfAuthUserHaveRestaurateurRole()
    {  
        return auth()->user()->hasRole('Restaurateur')  ;

       
    }

    public function CheckIfAuthUserHaveCustomerRole()
    {  
        return auth()->user()->hasRole('Client')  ;

       
    }

    public function getTheRoleNameOfAuthUser()
    {  
        return auth()->user()  ;

       
    }
    
   

    
}
