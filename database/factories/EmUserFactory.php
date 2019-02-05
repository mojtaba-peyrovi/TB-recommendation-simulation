<?php

use Faker\Generator as Faker;

$factory->define(App\EmUser::class, function (Faker $faker) {

    //$items1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $items1 = array_values(range(1, 200));
    //dd($items1);
    //dd($items);
    $rand1 = rand(1, 20);
    //dd($rand);
    $r1 = array_rand($items1, $rand1);
    //dd($r);
    $rr1 = implode(",", $r1);
    //dd($rr);

    $items2 = array_values(range(1, 200));
    $rand2 = rand(1, 20);
    $r2 = array_rand($items2, $rand2);
    $rr2 = implode(",", $r2);

    $items3 = array_values(range(1, 6));
    $rand3 = rand(1, count($items3));
    $r3 = array_rand($items3, $rand3);
    $rr3 = implode(",", $r3);
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
        'motivation_types' => $rr3,
        'sex_match' => $faker->randomElement([0,1]),
        'diet_method_code' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'is_friend_with_id' => $rr2,
        'is_liked_by_id' => $rr1,
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        'created_at' => $faker->dateTimeBetween($startDate = '-20 days', $endDate = 'now'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-10 days', $endDate = 'now'),

    ];
});
