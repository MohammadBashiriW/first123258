<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Signinuser;
use Faker\Generator as Faker;

$factory->define(Signinuser::class, function (Faker $faker) {
    return [
            'text'=>$faker->text(100),
            'body'=>$faker->text(100),
            'email'=>$faker->text(100),
    ];
});
