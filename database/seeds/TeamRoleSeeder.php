<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_roles')->insert([
            'name' => 'creator',
            'description' => 'creator of the project.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('team_roles')->insert([
            'name' => 'moderator',
            'description' => 'moderator of the project.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('team_roles')->insert([
            'name' => 'viewer',
            'description' => 'watcher of the project.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
