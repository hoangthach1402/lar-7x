<?php
use App\Model;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\shark ;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(shark::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->ean8,
        'name' => $faker->username,
                
        'email' => $faker->unique()->safeEmail,
        'shark_level'  => Hash::make(12345678),
    ];
});
