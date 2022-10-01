<?php

namespace App\Http\Controllers;
use App\Interfaces\RestaurantOwnerInterface;
use App\Models\Restaurant;
use Illuminate\Http\Request;

use App\Models\City;


class RestaurantOwnerController extends Controller
{
    
       private RestaurantOwnerInterface $RestaurantOwnerRepository;
       public function __construct(RestaurantOwnerInterface $RestaurantOwnerRepository)
    {
        $this->RestaurantOwnerRepository = $RestaurantOwnerRepository;

    }

    public function index()
    {
        $restaurants= $this->RestaurantOwnerRepository->all();
       
        
       
       return  view('restaurants.index', compact('restaurants'));
    }
    
   
    public function create(Restaurant $restaurant)
    {
        
       $cities= $this->RestaurantOwnerRepository->getCity();
       
        return view('restaurants.create',compact('cities'));
    }

    public function store(Request $request,Restaurant $restaurant)
    {
        
        $request->validate([
            'name' => 'required|min:5',
            'image' => 'required',
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
        return view('restaurants.show', compact('restaurant'));
    }
    public function edit(Restaurant $restaurant)
    {
         
        return view('restaurants.edit', compact('restaurant'));

    }
  
    
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|min:5',
        ]);
  
        $this->RestaurantOwnerRepository->update($request->all(),$restaurant->id);
       
  
        
        return redirect()->route('restaurants.index')
        ->with('success', 'Contact Updated Successfully.');
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function destroy(Restaurant $restaurant)
    {
        $this->RestaurantOwnerRepository->delete($restaurant->id);
       
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
