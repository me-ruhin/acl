<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $superAdminRole = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $editor = Role::create(['name' => 'Editor']);

        $permissionlists = [

            "add.user",
            "edit.user",
            "view.user",
            "delete.user",
        ];

        foreach($permissionlists as $permisson){

          $permissions =  Permission::create(['name' => $permisson]);

            $superAdminRole->givePermissionTo($permissions);

        }

     

        
    }
}
