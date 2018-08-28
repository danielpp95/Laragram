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
        // create 20 users
        $users = factory(App\User::class, 20)->create();

        $users->each(function(App\User $user) use ($users) {
            // each user has 10 posts
            $posts = factory(App\Post::class, 10)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
