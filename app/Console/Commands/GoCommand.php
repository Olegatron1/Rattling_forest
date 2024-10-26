<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:go-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {

//		$profile = Profile::first();
//		$profile->likedPosts()->attach(1);

		$post = Post::find(1);
		dd($post->likedByProfiles);
//		$comment = Comment::first();
//		dd($comment->commentable);
//		$post = Post::factory()->create();
//		dd($post->comments()->create([
//			'profile_id' => 1,
//			'content' => '111111111',
//		]));

//		$profile = Profile::first();
//		$user = User::find(2);
//		$category = Category::first();
	}
}
