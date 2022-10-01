<?php

namespace App\Http\Controllers;
use App\Interfaces\RestaurantOwnerInterface;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    private RestaurantOwnerInterface $RestaurantOwnerRepository;
    public function __construct(RestaurantOwnerInterface $RestaurantOwnerRepository)
 {
     $this->RestaurantOwnerRepository = $RestaurantOwnerRepository;

 }

 public function getRestaurant()
 {
    
     $restaurants= $this->RestaurantOwnerRepository->all();
    
     
    
    return  view('homepage.index', compact('restaurants'));
 }
}
