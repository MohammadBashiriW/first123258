<?php

use Illuminate\Database\Seeder;
use App\Signinuser;
class singin_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Signinuser::class , 10) ->create();
    }
}
