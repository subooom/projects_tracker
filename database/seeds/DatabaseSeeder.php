<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateAllTables();

        $this->call([
            AppSeeder::class,
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
            PermissionSeeder::class,
            UserRolePermissionSeeder::class,
        ]);
    }

    private function truncateAllTables(){
        print("Deleting all entries from the database for a fresh seed... \r\n");
        $i = 1;
        $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
        foreach ($tableNames as $name) {
            print("Clearing ".$name."... \r\n");
            //if you don't want to truncate migrations
            DB::table($name)->truncate();
        }
        print("All entries deleted! \r\n");

    }
}
