<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\Event::class, function (Faker $faker) {

    $title = $faker->sentence;
    $content = $faker->paragraph;
    $slug = Str::slug($title);
    $start_at = $faker->dateTimeBetween('now', '+1 years')->format('Y-m-d');
    
    return [
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'slug' => $slug,
        'title' => $title,
        'content' => $content,
        'start_at' => date('Y-m-d', strtotime($start_at)),
        'end_at' => $faker->dateTimeBetween($start_at, '+1 years')->format('Y-m-d'), // secret
        'status' => 1,
        'plugin' => '',
        'seo' => strip_tags(str_limit($content, 150)),
        'keyword' => $title,
        'image' => '',
    ];
});
