<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $title = $faker->word;
    return [
        'name' => $title,
        'slug' => str_slug($title)
    ];
});
