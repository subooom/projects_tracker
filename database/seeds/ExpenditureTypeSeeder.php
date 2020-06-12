<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenditureTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expenditure_type')->insert([
            'name' => 'Travel',
            'description' => 'Money spent on travels.',
            'project_id' => App\Project::all()->random()->id,
            'created_by' => App\User::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('expenditure_type')->insert([
            'name' => 'Food',
            'description' => 'Money spent for food.',
            'project_id' => App\Project::all()->random()->id,
            'created_by' => App\User::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
