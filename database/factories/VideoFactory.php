<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Image;
use App\Model\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'url' => '',
        'image_id' => function(){
            return Image::all()->random();
        }
    ];
});
