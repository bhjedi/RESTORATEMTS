<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Exception;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

 

public function restautants(){
    return $this->hasMany(Restaurant::class,'user_id','id');

}
public function reviews(){
    return $this->hasMany(Review::class,'user_id','id');

}

public function chekIfReviewBelongToUser($id){
   

    if(strval(auth()->id())!==$id) throw new Exception("Vous n'etest pas autoriser à faire cette action");
   

}

public function getTheRoleNameOfAuthUser()
{  
    return auth()->user()  ;

   
}

public function CheckIfAuthUserHaveRestaurateurRole()
{  
    return auth()->user()->hasRole('Restaurateur')  ;

   
}

public function CheckIfAuthUserHaveCustomerRole()
{  
    return auth()->user()->hasRole('Client')  ;

   
}

}
