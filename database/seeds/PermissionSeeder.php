<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'can-use-apps',
            'description' => 'test',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'can-use-dashboard',
            'description' => 'test',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
    }
}
