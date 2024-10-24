<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Category extends Model
{
    use HasFactory;

    protected $guarded = false;

	public function posts(): HasMany
	{
		return $this->hasMany(Post::class);
	}

	public function post(): HasOne
	{
		return $this->hasOne(Post::class)->latestOfMany('published_at');
	}

	public function comments(): HasManyThrough
	{
		return $this->hasManyThrough(Comment::class, Post::class);
	}

	public function comment(): HasOneThrough
	{
		return $this->hasOneThrough(Comment::class, Post::class);
	}

}
