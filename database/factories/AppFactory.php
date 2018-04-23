<?php

use Faker\Generator as Faker;

$factory->define(\App\App::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'image' => '/storage/img/app1_0.jpg',
        'description' => $faker->text,
        'price' => $faker->numberBetween(0, 1000)
    ];
});
