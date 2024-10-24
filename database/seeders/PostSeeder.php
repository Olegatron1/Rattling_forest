<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		Post::factory(5)
			->has(Tag::factory(3))
			->create();

//        $posts = Post::factory()->count(20)->create();
//
//		$tagIds = Tag::all()->pluck('id');
//
//		foreach ($posts as $post) {
//			$post->tags()->attach($tagIds->random(fake()->numberBetween(1, 5)));
//		}
    }
}
