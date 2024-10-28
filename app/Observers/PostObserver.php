<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
		Log::create([
			'model' => get_class($post),
			'event' => 'created',
			'old_value' => null,
			'dirty' => json_encode($post->getAttributes()),
		]);
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
		Log::create([
			'model' => get_class($post),
			'event' => 'updated',
			'old_value' => json_encode($post->getOriginal()),
			'dirty' => json_encode($post->getDirty()),
		]);
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
		Log::create([
			'model' => get_class($post),
			'event' => 'deleted',
			'old_value' => json_encode($post->getAttributes()),
			'dirty' => null,
		]);
    }

	/**
	 * Handle the Post "retrieved" event.
	 */
	public function retrieved(Post $post): void
	{
		Log::create([
			'model' => get_class($post),
			'event' => 'retrieved',
			'old_value' => json_encode($post->getAttributes()),
			'dirty' => null,
		]);
    }
}
