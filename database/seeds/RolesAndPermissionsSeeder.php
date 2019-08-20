<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'add post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'view post']);
        Permission::create(['name' => 'delete post']);

        // create roles and assign created permissions

        // this can be done as separate statements
        Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

        // or may be done by chaining
        Role::create(['name' => 'user'])
            ->givePermissionTo(['view post', 'add post']);
    }
}
