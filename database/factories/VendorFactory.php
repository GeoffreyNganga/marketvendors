<?php

use Faker\Generator as Faker;
use App\Models\Vendor;

$factory->define(Vendor::class, function (Faker $faker) {
    return [
        'phone' => $faker->e164PhoneNumber,
        'rating'=>$faker->numberBetween($min = 0, $max = 10), 
        'account_status' =>$faker->numberBetween($min = 0, $max = 3), 
        'location'=> serialize(array($faker->latitude($min = -1, $max = 1), $faker->longitude($min = 36, $max = 38))),
        'image'=>$faker->imageUrl($width = 640, $height = 480),
    ];
});
