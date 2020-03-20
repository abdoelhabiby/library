<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class makeSuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          /*
           1- create the super admin
           2- create roles and pemissions
           3- giv the super admin all pemission

           4- $roles = ['super_admin','admin','staff']
           5- $permission =[];

        */

           $permission = [
                "read_admin",
                "create_admin",
                "update_admin",
                "delete_admin",
                "create_staff",
                "read_staff",
                "update_staff",
                "delete_staff",
                "create_category",
                "read_category",
                "update_category",
                "delete_category",
                "create_book",
                "read_book",
                "update_book",
                "delete_book",     
                "read_reservation",
                "update_reservation",
                "delete_reservation",
                "read_students",
                "edit_setting"

                ];

$permission_admin = [
	             "create_category",
                "read_category",
                "update_category",
                "delete_category",
                "create_book",
                "read_book",
                "update_book",
                'read_students',
                "read_reservation",
                "update_reservation",
                "delete_reservation",
                "delete_book"
            ];



     $admin = \App\Admin::create(['name' => 'super_admin','email' => 'super_admin@admin.com','phone' => '0000000','level' => 'super_admin','password' => bcrypt(123456)]);

     $role_s_admin = Role::create(['name' => 'super_admin']);

     $role_admin = Role::create(['name' => 'admin']);

        Role::create(['name' => 'staff']);


      foreach($permission as $permissions){

          Permission::create(['name' => $permissions]);
      }  

       $role_s_admin->givePermissionTo($permission);

       $role_admin->givePermissionTo($permission_admin);

       $admin->assignRole($role_s_admin);

    //-----------------------------------------------------------

    \App\User::create(['name' => 'ahmed','email' => 'a@a.com','password' => bcrypt(123456)]); 


    }
}
