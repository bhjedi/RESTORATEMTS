<?php

namespace App\Http\Controllers;
use App\Interfaces\RestaurantOwnerInterface;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Auth;
class HomepageController extends Controller
{
    protected $checkedAuth = false ;
    private RestaurantOwnerInterface $RestaurantOwnerRepository;
    public function __construct(RestaurantOwnerInterface $RestaurantOwnerRepository)
 {
     $this->RestaurantOwnerRepository = $RestaurantOwnerRepository;

 }

 public function getRestaurant(Request $request)
 {
    
    
     $restaurants= $this->RestaurantOwnerRepository->all($request);
     
    
     
    
    return  view('homepage.index', compact('restaurants'));
 }
 
 public function show($id)
 {
   
    $checkedAuth = false ; 
    $this->checkIfAuthUser() && $checkedAuth = true ;
      $restaurant= $this->RestaurantOwnerRepository->find($id);
       
     return view('homepage.show', compact('restaurant','checkedAuth'));
 }
 
 public function addReview(Request $request)
 {
    
   $restaurant= $this->RestaurantOwnerRepository->addReview($request->all());

       
     return redirect()->back();
 }
 
 public function deleteNoteByOwner($id)
 {
    
   $restaurant= $this->RestaurantOwnerRepository->deleteNoteByOwner($id);

       
     return redirect()->back();
 }

 public function checkIfAuthUser(): bool
 {
    
     return Auth::id()?true:false;
     
 }
}
