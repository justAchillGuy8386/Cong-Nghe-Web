<?php

namespace Database\Seeders\seeders_posts;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Post',
                'content' => 'This is the content of the third post.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
