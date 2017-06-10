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
        factory('App\Models\Post', 5)->create();
    }
}
