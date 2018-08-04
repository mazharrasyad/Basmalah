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
      $role_admin = new Role();
      $role_admin->name = 'Admin';
      $role_admin->save();

      $role_dkm = new Role();
      $role_dkm->name = 'DKM';
      $role_dkm->save();
    }
}
