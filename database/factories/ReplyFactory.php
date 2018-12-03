<?php

use Faker\Generator as Faker;
use App\Model\Question;
use App\Model\Category;

$factory->define(App\Model\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function() {
        	return Category::all()->random();
        },
        'user_id' => function() {
        	return \App\User::all()->random();
        }
    ];
});
