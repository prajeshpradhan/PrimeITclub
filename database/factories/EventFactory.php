<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'date' => $faker->date,
        'time' => $faker->time,
        'resource_person' => $faker->name,
        'resource_person_pic' => 'pic.jpg',
        'resource_person_designation' => $faker->jobTitle,
        'description' => $faker->paragraph,
        'banner_image' => 'banner.jpg',
        'price' => $faker->randomDigit,
        'category_id' => 1
    ];
});
