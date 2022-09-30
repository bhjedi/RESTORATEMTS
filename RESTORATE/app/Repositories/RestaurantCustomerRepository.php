<?php

namespace App\Repositories;
use App\Models\Restaurant;
use App\Interfaces\RestaurantCustomerInterface;
use Illuminate\Support\Facades\DB;


class  RestaurantCustomerRepository extends BaseRepository implements RestaurantCustomerInterface
{

    public function __construct(Restaurant $model)
    {
        parent::__construct($model);

    }

  

}
