<?php

use Illuminate\Database\Seeder;
use App\User;
class usersseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class , 10) ->create();
    }
}
