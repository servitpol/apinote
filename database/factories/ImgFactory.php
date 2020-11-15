<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Img;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

$factory->define(Img::class, function (Faker $faker) {

    $rand_picture = 'https://source.unsplash.com/random';
    $filename     = Str::random(10) . '.jpg';

    $fake_puth = public_path('images/fake');

    if (!File::exists($fake_puth)) {
        File::makeDirectory($fake_puth, 0755, true);
    }

    Image::make($rand_picture)->save(public_path('images/fake/' . $filename));

    $thumb = Image::make(public_path('images/fake/' . $filename))->resize(300, 200);
    $thumb->save(public_path('images/fake/thumb_' . $filename), 60);

    $full_img_path  = url('/') . '/public/images/fake/' . $filename;
    $thumb_img_path = url('/') . '/public/images/fake/thumb_' . $filename;

    return [
        'full_img_path'  => $full_img_path,
        'thumb_img_path' => $thumb_img_path,
    ];
});
