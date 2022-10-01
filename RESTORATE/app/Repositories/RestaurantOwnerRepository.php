<?php

namespace App\Repositories;
use App\Models\Restaurant;
use App\Models\Media;


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


    public function create(array $data)
    {
       
        $restaurant= $this->model->create([
                 'name' => $data["name"],
                "user_id"=> Auth::id(),
                 "city_id"=>1
             ]);
            $this->SaveRestaurantImageInPublicFolder($data['image'],$restaurant->id);

            return $restaurant;
      
    }
    protected function SaveRestaurantImageInPublicFolder($image,$id)
    {
       
            $filename= date('YmdHi').$image->getClientOriginalName();
            $this->SaveRestaurantImageToPublic($image,$filename);
            $this->SaveRestaurantImage($filename,$id);
    }
   

    protected function SaveRestaurantImage(string $image,$id)
    {
       
       
        Media::create([
            'restaurant_id'=>$id,
            'image'=>$image,
           
        ]);
    }
    protected function SaveRestaurantImageToPublic($image,$filename)
    {
       
       
        $image->move(public_path('public/Image'), $filename);
    }

    public function getCity()
    {
       
        return $this->model->getCity();
    }
  

}
