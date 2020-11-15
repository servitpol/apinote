<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DataNote;
use Faker\Generator as Faker;

$factory->define(DataNote::class, function (Faker $faker) {

    $user_id = rand(1, 4);
    $note_id = $faker->unique()->numberBetween(1, 50);

    $img_id = (rand(0, 2) == 0) ? null : rand(1, 15);

    return [
        'user_id' => $user_id,
        'note_id' => $note_id,
        'img_id'  => $img_id,
    ];
});
