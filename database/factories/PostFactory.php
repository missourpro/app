<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence,
        'image' => asset('storage/img/app1_0.jpg'),
        'body' => $faker->text,
    ];
});
