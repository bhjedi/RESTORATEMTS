<?php

namespace App\Repositories;
use App\Models\Restaurant;
use App\Interfaces\RestaurantOwnerInterface;
use Illuminate\Support\Facades\DB;


class  RestaurantOwnerRepository extends BaseRepository implements RestaurantOwnerInterface
{

    public function __construct(Restaurant $model)
    {
        parent::__construct($model);

    }

  

}
