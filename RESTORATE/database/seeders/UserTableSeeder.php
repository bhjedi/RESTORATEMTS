<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create()->each(function ($user) {
            $user->assignRole('Restaurateur'); // specifier le nom du role
        });
        User::factory()->count(1)->create()->each(function ($user) {
            $user->assignRole('Client'); // specifier le nom du role
        });
    }
}
