<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserRoleSeeder::class,
            TeamRoleSeeder::class,
            UserSeeder::class,
            TaskStatusSeeder::class,
            TeamSeeder::class,
            UserTeamRoleSeeder::class,
            ProjectTypeSeeder::class,
            ProjectSeeder::class,
            TaskSeeder::class,
            ExpenditureTypeSeeder::class,
            ExpenseSeeder::class,
        ]);
    }
}
