<?php

namespace App\Http\Controllers;
use App\Interfaces\RestaurantOwnerInterface;
use App\Models\Restaurant;
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

    public function index(Restaurant $restaurant)
    {
      
        
        $restaurants= $this->RestaurantOwnerRepository->all();
       
        
       
       return $restaurant->CheckIfAuthUserHaveRestaurateurRole()? view('restaurants.index', compact('restaurants')): abort(404);
       
    }
    
   
    public function create(Restaurant $restaurant)
    {
        $this->checkIfRestaurateurRole($restaurant);
        
       $cities= $this->RestaurantOwnerRepository->getCity();
       
        return view('restaurants.create',compact('cities'));
    }

    public function checkIfRestaurateurRole( $restaurant)
    {
        if(!$restaurant->CheckIfAuthUserHaveRestaurateurRole()) throw new Exception("Vous n'etest pas autoriser a faire cette action");
        
            
         
    }

    public function store(Request $request,Restaurant $restaurant)
    {
        $this->checkIfRestaurateurRole($restaurant);

        $request->validate([
            'name' => 'required|min:5',
            'images' => 'required',
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
    public function show(Restaurant $restaurant)
    {
        $this->checkIfRestaurateurRole($restaurant);

        return view('restaurants.show', compact('restaurant'));
    }
    public function edit(Restaurant $restaurant)
    {
        $this->checkIfRestaurateurRole($restaurant);

         
        return view('restaurants.edit', compact('restaurant'));

    }
  
    
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $this->checkIfRestaurateurRole($restaurant);

        $request->validate([
            'name' => 'required|min:5',
        ]);
  
        $this->RestaurantOwnerRepository->update($request->all(),$restaurant->id);
       
  
        
        return redirect()->route('restaurants.index')
        ->with('success', 'Contact Updated Successfully.');
    }
   
   
    public function destroy(Restaurant $restaurant)
    {
        $this->checkIfRestaurateurRole($restaurant);

        $this->RestaurantOwnerRepository->delete($restaurant->id);
       
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
