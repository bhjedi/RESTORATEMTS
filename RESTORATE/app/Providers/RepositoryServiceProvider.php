<?php

namespace App\Providers;
use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\RestaurantOwnerInterface;
use App\Interfaces\RestaurantCustomerInterface;

use App\Repositories\BaseRepository;
use App\Repositories\RestaurantCustomerRepository;
use App\Repositories\RestaurantOwnerRepository;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(RestaurantCustomerRepository::class, RestaurantCustomerInterface::class);
        $this->app->bind(RestaurantOwnerInterface::class, RestaurantOwnerRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
