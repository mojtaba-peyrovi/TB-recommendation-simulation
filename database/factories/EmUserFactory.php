<?php

use Faker\Generator as Faker;

$factory->define(App\EmUser::class, function (Faker $faker) {
    return [
        'profile_creation' => $faker->dateTimeBetween($startDate = '-365 days', $endDate = 'now'),
        'lang' => $faker->randomElement(['English','Thai','French','Italian','Spanish','Turkish','Chinese','Arabic']),
        'age' => $faker->numberBetween(15,95),
        'gender' => $faker->randomElement([0,1]),
        'wieght_init' => $faker->numberBetween(30,100),
        'wieght_actual' => $faker->numberBetween(30,100),
        'wieght_target' => $faker->numberBetween(30,100),
        'pic_exist' => $faker->randomElement([0,1]),
        'motivation_degree' => $faker->randomElement([1,2,3,4,5,6]),
        'sex_match' => $faker->randomElement([0,1]),
        'diet_method_code' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        'created_at' => $faker->dateTimeBetween($startDate = '-20 days', $endDate = 'now'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-10 days', $endDate = 'now'),

    ];
});
