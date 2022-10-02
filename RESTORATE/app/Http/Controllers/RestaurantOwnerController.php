<?php

namespace App\Http\Controllers;
use App\Interfaces\RestaurantOwnerInterface;
use App\Models\Restaurant;
use App\Models\User;


use Illuminate\Http\Request;
use Error;
use Exception;


class RestaurantOwnerController extends Controller
{
    
       private RestaurantOwnerInterface $RestaurantOwnerRepository;
       public function __construct(RestaurantOwnerInterface $RestaurantOwnerRepository)
    {
        $this->RestaurantOwnerRepository = $RestaurantOwnerRepository;

    }



    public function index(User $user)
    {
        $restaurants= $this->RestaurantOwnerRepository->all();
        return $user->CheckIfAuthUserHaveRestaurateurRole()? view('restaurants.index', compact('restaurants')): abort(404);
       
    }
    
   
    public function create(User $user)
    {
        $this->checkIfRestaurateurRole($user);
        
       $cities= $this->RestaurantOwnerRepository->getCity();
       
        return view('restaurants.create',compact('cities'));
    }

    public function checkIfRestaurateurRole( $user)
    {
        if(!$user->CheckIfAuthUserHaveRestaurateurRole()) throw new Exception("Vous n'etest pas autoriser a faire cette action");
         
    }

    public function store(Request $request,User $user)
    {
        $this->checkIfRestaurateurRole($user);

        $request->validate([
            'name' => 'required|min:5',
            'images' => 'required',
            'city_id'=>'required',
        ]);
  
        $restaurants= $this->RestaurantOwnerRepository->create($request->all());
        
        return redirect()->route('restaurants.index')
            ->with('success', 'Restaurant Created Successfully.');
  
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function show(Restaurant $restaurant ,User $user)
    {
        $this->checkIfRestaurateurRole($user);

        return view('restaurants.show', compact('restaurant'));
    }


    public function edit(Restaurant $restaurant,User $user)
    {
        $this->checkIfRestaurateurRole($user);
        $cities= $this->RestaurantOwnerRepository->getCity();

       return view('restaurants.edit', compact('restaurant','cities'));

    }
  
    
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update(Request $request, Restaurant $restaurant,User $user)
    {
        $this->checkIfRestaurateurRole($user);

        $request->validate([
            'name' => 'required|min:5',
        ]);
  
        $this->RestaurantOwnerRepository->update($request->all(),$restaurant->id);
        
        return redirect()->route('restaurants.index')
        ->with('success', 'Restaurant Updated Successfully.');
    }
   
   
    public function destroy(Restaurant $restaurant, User $user)
    {
        $this->checkIfRestaurateurRole($user);

        $this->RestaurantOwnerRepository->delete($restaurant->id);
       
          return redirect()->route('restaurants.index')
        ->with('success', 'Restaurant supprimer avec succes.');
    }
}
