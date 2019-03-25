<?php

use Faker\Generator as Faker;
use App\Models\Market;

$factory->define(Market::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'location' => $faker->city,
        'open_days' =>serialize(array($faker->dayOfWeek, $faker->dayOfWeek)),
        'coordinates'=> serialize(array($faker->latitude($min = -1, $max = 1), $faker->longitude($min = 36, $max = 38))),
        'image'=>$faker->imageUrl($width = 640, $height = 480),
        'description'=> $faker->sentence,
    ];
});

