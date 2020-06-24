<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apps')->insert([
            'title' => 'radicle_flow();',
            'slug' => 'radicle_flow',
            'background' => '#fef76c',
            'color' => '#58355E',
            'overlayBackground' => '#30F2F2',
            'url' => 'http://localhost:8081',
            'buttons' => '[
                {
                   "title":"s\'up, s\'up?",
                   "url":"#"
                },
                {
                   "title":"go get some?",
                   "url":"http://localhost:8081"
                },
                {
                   "title":"sauce, raw sauce!",
                   "url":"#"
                }
             ]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('apps')->insert([
            'title' => 'jod_ghatau();',
            'slug' => 'jod-ghatau',
            'background' => '#FF5964',
            'color' => '#F7EBE8',
            'overlayBackground' => '#EF2D56',
            'url' => 'http://localhost:8081',
            'buttons' => '[
                {
                   "title":"what it do tho?",
                   "url":"#"
                },
                {
                   "title":"go get some?",
                   "url":"http://localhost:8082"
                },
                {
                   "title":"sass, a lot of sass!",
                   "url":"#"
                }
             ]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('apps')->insert([
            'title' => 'ktm_rock();',
            'slug' => 'ktm-rock',
            'background' => '#C42021    ',
            'color' => '#FCBA04',
            'overlayBackground' => '#590004',
            'url' => 'http://localhost:8082',
            'buttons' => '[
                {
                   "title":"no pop, ay!",
                   "url":"#"
                },
                {
                   "title":"go get some?",
                   "url":"http://localhost:8083"
                },
                {
                   "title":"sauce, raw sauce!",
                   "url":"#"
                }
             ]',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
