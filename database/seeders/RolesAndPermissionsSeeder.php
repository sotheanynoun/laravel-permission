<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
         // Define permissions
         $permissions = [
            'manage management',
            'manage provincial',
            'manage city hall',
            'manage local author',
            'access guest'
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Define roles
        $roles = [
            'management' => ['manage management'],
            'provincial' => ['manage provincial'],
            'city hall' => ['manage city hall'],
            'local author' => ['manage local author'],
            'guest' => ['access guest']
        ];

        // Create roles and assign permissions
        foreach ($roles as $role => $rolePermissions) {
            $role = Role::create(['name' => $role]);
            $role->givePermissionTo($rolePermissions);
        }
    }
}