<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->paragraph,
        'fee'=>$faker->numberBetween(1000,10000),
        'duration'=>$faker->numberBetween(1,10),
        'duration_type_id'=>kkl,
    ];
});
