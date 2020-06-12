<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_status')->insert([
            'name' => 'pending',
            'description' => 'yet to be done.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('task_status')->insert([
            'name' => 'in-progress',
            'description' => 'being done by somebody',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
