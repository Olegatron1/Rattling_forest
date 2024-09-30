<?php

namespace App\Console\Commands;

use App\Models\Post;
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
//        $data = [
//            'email' => 'masha@mail.ru',
//            'password' => '123123123',
//        ];

//        $post = Post::find(2);
//
//        $post->delete();


//        $user = User::create($data);


//        $user = User::find(2)->update([
//            'email' => 'prostitutkanika@mail.ru',
//        ]);

        $user = User::all();

        dd($user);
    }
}
