<?php

namespace App\Http\Controllers;
use App\Interfaces\RestaurantOwnerInterface;
use App\Models\Restaurant;
use App\Models\User;

use Illuminate\Http\Request;
use Auth;
class HomepageController extends Controller
{
    protected $authuserRole  ;
    private RestaurantOwnerInterface $RestaurantOwnerRepository;
    public function __construct(RestaurantOwnerInterface $RestaurantOwnerRepository)
 {
     $this->RestaurantOwnerRepository = $RestaurantOwnerRepository;

 }

 public function getRestaurant(Request $request,Restaurant $restaurant)
 {
    
     $restaurants= $this->RestaurantOwnerRepository->getRestau($request);
     
     
    return  view('homepage.index', compact('restaurants'));
 }

 
 public function show($id)
 {
   
    $checkedAuth = false ; 
    $authuserRole = null;
    if( $this->checkIfAuthUser()){
      $checkedAuth = true ;
      $authuserRole = Restaurant::getTheRoleNameOfAuthUser();
     
      
    }
    
    $restaurant= $this->RestaurantOwnerRepository->find($id);
       
     return view('homepage.show', compact('restaurant','checkedAuth','authuserRole'));
 }
 
 public function addReview(Request $request)
 {
    
   $restaurant= $this->RestaurantOwnerRepository->addReview($request->all());

       
     return redirect()->back();
 }
 
 public function deleteNoteByOwner(Request $request, User $user)
 {
  $user->chekIfReviewBelongToUser($request->user_id);
   
   $restaurant= $this->RestaurantOwnerRepository->deleteNoteByOwner($request->all());

       
     return redirect()->back();
 }
 
 public function answerNote(Request $request,User $user)
 {
  
   $user->chekIfReviewBelongToUser($request->answer_user_id);
   $restaurant= $this->RestaurantOwnerRepository->answerNote($request->all());

       
     return redirect()->back();
 }

 public function checkIfAuthUser(): bool
 {
    
     return Auth::id()?true:false;
     
 }
}
