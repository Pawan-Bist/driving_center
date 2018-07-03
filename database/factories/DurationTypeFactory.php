<?php

use Faker\Generator as Faker;

$factory->define(App\DurationType::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'code'=>str_random(1),
    ];
});
