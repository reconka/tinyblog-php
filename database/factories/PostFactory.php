<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    
    $title = $faker->sentence(4);

    return [
        'user_id' 		=> rand(1,30),
        'category_id' 	=> rand(1,20),
        'name' 			=> $title,
        'slug' 			=> str_slug($title),
        'excerpt' 		=> $faker->text(250),
        'body' 			=> $faker->text(600),
        'file' 			=> $faker->imageUrl($width = 1200, $height = 600),
        'status'        => $faker->randomElement(['DRAFT', 'PUBLISHED'])
    ];

});
