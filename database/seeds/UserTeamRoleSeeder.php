<?php

use Illuminate\Database\Seeder;

class UserTeamRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserTeamRole::class, 25)->create();
    }
}
