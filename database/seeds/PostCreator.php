<?php

use Illuminate\Database\Seeder;

class PostCreator extends Seeder
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
        	'content' => 'Post con seeder',
        	'user_id' => 1
        ]);
    }
}
