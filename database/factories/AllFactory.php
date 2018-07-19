<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'pseudo' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'bio' => $faker->text(500),
        'avatar_generated' => $faker->boolean(50),
        'private' => $faker->boolean(50),
        'status' => $faker->randomElement(['admin', 'writer', 'moderator', 'member']),
        'password' => $faker->password,
    ];
});

$factory->define(App\Article::class, function (Faker $faker) {
	return [
		'title' => $faker->text(50),
		'body' => $faker->paragraphs(rand(3, 6), true),
		'tags' => $faker->words(rand(1, 6), true),
		'public' => $faker->boolean(50),
		'prioritary' => $faker->boolean(10),
		'user_id' => function () {
			$ids = array();
        	foreach (App\User::all() as $user)
        		if ($user->status == 'writer' || $user->admin == 'admin')
        			$ids[] = $user->id;
        	return $ids[rand(0, count($ids) - 1)];
        }
	];
});

$factory->define(App\Comment::class, function (Faker $faker) {
	return [
		'content' => $faker->paragraphs(rand(1, 8), true),
		'article_id' => function () {
			$articles = App\Article::all();
			return $articles[rand(0, count($articles) - 1)]->id;
		},
		'user_id' => function () {
			$users = App\User::all();
			return $users[rand(0, count($users) - 1)]->id;
		},
	];
});

$factory->define(App\Vote::class, function (Faker $faker) {
	return [
		'comment_id' => function () {
			$comments = App\Comment::all();
			return $comments[rand(0, count($comments) - 1)]->id;
		},
		'user_id' => function () {
			$users = App\User::all();
			return $users[rand(0, count($users) - 1)]->id;
		},
		'type' => $faker->randomElement(['upvote', 'upvote', 'upvote', 'downvote']),
	];
});