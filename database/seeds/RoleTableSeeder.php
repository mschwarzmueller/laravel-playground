<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User, may not assign Roles and may not write Articles';
        $role_user->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'An Admin, may assign Roles, may not write Articles';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'Author';
        $role_admin->description = 'An Author, may not assign Roles, may write Articles';
        $role_admin->save();
    }
}
