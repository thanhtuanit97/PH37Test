<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['PC','LapTop', 'Chuột không dây', 'Chuột có dây', 'Miếng lót chuột', 'Bàn Phím cơ']),
    ];
});
