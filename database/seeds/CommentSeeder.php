<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([

            ['user_id' => 1, 'post_id'=> 1, 'content' => "Post one content"],
            ['user_id' => 1, 'post_id'=> 2, 'content' => "Post one 2  content"],

            ['user_id' => 1, 'post_id'=> 3, 'content' => "Post one3 content"],
            ['user_id' => 1, 'post_id'=>4, 'content' => "Post one 4 content"],

        ]);
    }
}
