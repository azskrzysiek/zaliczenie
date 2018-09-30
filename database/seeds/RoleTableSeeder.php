<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

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
        $role_user ->name = 'User';
        $role_user ->description = 'Normalny user';
        $role_user ->save();

        $role_trainer = new Role();
        $role_trainer ->name = 'Trainer';
        $role_trainer ->description = 'Trener';
        $role_trainer ->save();

        $role_admin = new Role();
        $role_admin ->name = 'Admin';
        $role_admin ->description = 'Admin';
        $role_admin ->save();
    }
    
}
