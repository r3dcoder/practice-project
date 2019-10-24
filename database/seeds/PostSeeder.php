<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([

            ['user_id' => 1, 'title'=> "Post 1", 'content' => "Post one content"],
            ['user_id' => 1, 'title'=> "Post 1", 'content' => "Post one 2  content"],

            ['user_id' => 1, 'title'=> "Post 1", 'content' => "Post one3 content"],
            ['user_id' => 1, 'title'=> "Post 1", 'content' => "Post one 4 content"],

            ]);
    }
}
