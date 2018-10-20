<?php

use Illuminate\Database\Seeder;

class UserEventCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 50 users
		factory(App\User::class, 100)->create()->each(function ($user) {
		    //create 3 posts for each user
		    factory(App\Event::class, 3)->create(['user_id'=>$user->id])->each(function ($event) {
		    	factory(App\Comment::class, 7)->create(['event_id'=>$event->id]);
		    });
		});
    }
}
