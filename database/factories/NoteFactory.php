<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Note::class, function (Faker $faker) {

    $txt = $faker->realText(rand(100, 5000));

    $created_at = $faker->dateTimeBetween('-1 months', 'today');

    return [
        'note'       => $txt,
        'short_note' => Str::words($txt, 10),
        'created_at' => $created_at,
        'updated_at' => $created_at,
    ];
});
