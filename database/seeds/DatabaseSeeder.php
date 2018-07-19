<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 50)->create();
        factory(App\Article::class, 150)->create();
        factory(App\Comment::class, 350)->create();
        foreach (App\Comment::all() as $comment) {
        	if (rand(0, 3) != 0) {
        		$comments = App\Comment::all();
        		$parent = $comments[rand(0, count($comments) - 1)];
        		$comment->setParent($parent);
        		$comment->save();
        		$parent->setChild($comment);
        		$parent->save();
        	}
        	if (rand(0, 150) == 0) {
        		$comment->moderated = true;
        		$comment->save();
        	}
        }
        factory(App\Vote::class, 1000)->create();
    }
}
