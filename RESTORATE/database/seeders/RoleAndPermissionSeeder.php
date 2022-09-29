<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'create-restaurants']);
        Permission::create(['name' => 'edit-restaurants']);
        Permission::create(['name' => 'delete-restaurants']);
        Permission::create(['name' => 'show-restaurants']);

        Permission::create(['name' => 'create-reviews']);
        Permission::create(['name' => 'edit-reviews']);
        Permission::create(['name' => 'delete-reviews']);
        Permission::create(['name' => 'show-reviews']);
        Permission::create(['name' => 'create-media']);
        Permission::create(['name' => 'edit-media']);
        Permission::create(['name' => 'delete-media']);
        Permission::create(['name' => 'show-media']);
       

        $adminRole = Role::create(['name' => 'Restaurateur']);
        $clientRole = Role::create(['name' => 'Client']);
        $publicRole = Role::create(['name' => 'Public']);

        $adminRole->givePermissionTo([
            'create-restaurants',
            'edit-restaurants',
            'delete-restaurants',
            'show-restaurants',
            'create-reviews',
            'edit-reviews',
            'delete-reviews',
            'show-reviews',
            'create-media',
            'edit-media',
            'delete-media',
            'show-media',
        ]);

        $clientRole->givePermissionTo([
            'create-reviews',
            'edit-reviews',
            'delete-reviews',
            'show-reviews',
        ]);
        $publicRole->givePermissionTo([

            'show-restaurants',
        ]);
    }
}
