<?php

namespace App\Repositories;
use App\Models\Restaurant;
use App\Models\Media;
use App\Models\Review;


use App\Interfaces\RestaurantOwnerInterface;
use Illuminate\Support\Facades\DB;
use Auth;



class  RestaurantOwnerRepository extends BaseRepository implements RestaurantOwnerInterface
{

    public function __construct(Restaurant $model)
    {
        parent::__construct($model);
       
    }


    public function all(object $request=null)
    {
       
        return $this->isVerifiedSearch($request)?$this->model->getRestautFiltred($request["search"]):$this->model->getRestaut();
    }
    protected function isVerifiedSearch(object $request=null): bool
    {
        return isset($request["search"]);
    }
    public function addReview(array $data)
 {
   $rewiew= Review::create([
    "note" => $data["note"],
    "message" => $data["message"],
    "restaurant_id" => $data["restaurant_id"],
    "user_id"=>Auth::id()
]);

      
 }


    public function create(array $data)
    {
       
        $restaurant= $this->model->create([
                 'name' => $data["name"],
                "user_id"=> Auth::id(),
                 "city_id"=>1
             ]);
            $this->SaveRestaurantImageInPublicFolder($data['images'],$restaurant->id);

            return $restaurant;
      
    }
    protected function SaveRestaurantImageInPublicFolder($images,$id)
    {
           $this->SaveRestaurantImageToPublic($images,$id);
            
    }
   

    protected function SaveRestaurantImage(string $filename,$id)
    {
       
       
        Media::create([
            'restaurant_id'=>$id,
            'image'=>$filename,
           
        ]);
    }
    protected function SaveRestaurantImageToPublic($images,$id)
    {
       foreach($images as $image){

       
        $filename= date('YmdHi').$image->getClientOriginalName();
        $image->move(public_path('public/Image'), $filename);
        $this->SaveRestaurantImage($filename,$id);
    }
   
    }

    public function getCity()
    {
       
        return $this->model->getCity();
    }

    public function find($id)
     {
        
         return $this->model->getRestaurantDetail($id);
     }
  

}
