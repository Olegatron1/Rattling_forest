<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = false;

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}

	public function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}

	public function comments(): HasMany
	{
		return $this->hasMany(Comment::class);
	}

	public function profiles(): BelongsToMany
	{
		return $this->belongsToMany(Profile::class);
	}

	public function likes()
	{
		return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id', 'profile_id');
	}
}
