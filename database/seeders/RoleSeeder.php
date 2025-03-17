<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission; // Import the Permission model

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin', 'guard_name' => 'admin']);
        Role::create(['name' => 'user', 'guard_name' => 'admin']);
        Role::create(['name' => 'editor', 'guard_name' => 'admin']);

        // Create permissions
        Permission::create(['name' => 'edit articles', 'guard_name' => 'admin']);
        Permission::create(['name' => 'create articles', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete articles', 'guard_name' => 'admin']);

        // Assign permissions to roles
        $adminRole = Role::findByName('admin', 'admin');
        $adminRole->givePermissionTo(['edit articles', 'create articles', 'delete articles']);

        // Add other roles as needed
    }
}
