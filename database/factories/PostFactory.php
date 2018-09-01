<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'image' => 'https://picsum.photos/400/400?'.mt_rand(0,1080),
        'caption' => $faker->words(5, true),
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear,
    ];
});
