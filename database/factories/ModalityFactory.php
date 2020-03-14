<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Modality;
use Faker\Generator as Faker;

$factory->define(Modality::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'abbr' => $faker->unique()->word,
        'status' => true,
        
    ];
});
