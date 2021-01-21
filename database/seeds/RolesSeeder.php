<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'create-course' => true,
                'update-course' => true,
                'delete-course' => true,
                // 'create-target_group' => true,
                // 'update-target_group' => true,
                // 'delete-target_group' => true,
            ]
        ]);
        $coodinator = Role::create([
            'name' => 'Coordinator',
            'slug' => 'coordinator',
            'permissions' => [


            ]
        ]);
        $user = Role::create([
            'name' => 'User',
            'slug' => 'user',
            'permissions' => [
              ]
        ]);
    }
}
