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
        $data = [
            'title' => 'my 112',
            'content' => '123',
            'description' => '132',
            'views' => 200,
            'like' => 25,
            'author_id' => 1,
            'category_id' => 2,
        ];

//        $post = Post::find(2);
//
//        $post->delete();

        Post::query()->update([
            'views' => 123
        ]);

        dd(123123);
    }
}
