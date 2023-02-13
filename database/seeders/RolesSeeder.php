<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_standard = Role::create(['name' => 'standard']);

        $users_read = Permission::create(['name' => 'read_users']);
        $users_edit = Permission::create(['name' => 'edit_users']);
        $users_write = Permission::create(['name' => 'write_users']);
        $users_delete = Permission::create(['name' => 'delete_users']);

        $permissions_admin = [$users_read, $users_edit, $users_write, $users_delete];
        $permission_read = [$users_read];

        $role_admin->syncPermissions($permissions_admin);
        $role_standard->givePermissionTo($permission_read);
    }
}
