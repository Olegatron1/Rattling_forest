<?php

namespace App\Console\Commands;

use App\Models\Post;
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
		$post = Post::find(4);
		// attach
		// syncWithoutDetaching
		// sync
		// detach
		// toggle
		// updateExistingPivot

		$post->tags()->updateExistingPivot(6, [
			'status' => 5
			]);
	}
}
