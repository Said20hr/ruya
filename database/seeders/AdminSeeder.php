<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            // Creation du Role Admin
            $role = Role::create(['name' => 'admin']);
            // Creation du Permission Admin
            $permission = Permission::create(['name' => 'management']);
            // Assign Permission 'admin' to Role 'management'
            $role->givePermissionTo($permission);
            $permission->assignRole($role);
            $admin =  User::create([
                'name' => 'Admin',
                'email' => 'admin@ruya.studio',
                'password' => bcrypt('#U9OUlf3Rm3ui'),
                'remember_token' => \Illuminate\Support\Str::random(60),
            ]);
            $admin->assignRole('admin');

        }
    }
}
