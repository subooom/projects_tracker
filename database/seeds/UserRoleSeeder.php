<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('user_roles')->insert([
        'name' => 'Admin',
        'description' => 'Super Admin of the site.',
        'created_at' => now(),
        'updated_at' => now(),
      ]);

      DB::table('user_roles')->insert([
        'name' => 'Moderator',
        'description' => 'Moderator of the site.',
        'created_at' => now(),
        'updated_at' => now(),
      ]);

      DB::table('user_roles')->insert([
        'name' => 'User',
        'description' => 'User of the site.',
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
}
