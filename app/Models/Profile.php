<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = false;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function comments(): HasMany
	{
		return $this->hasMany(Comment::class);
	}

	public function posts(): BelongsToMany
	{
		return $this->belongsToMany(Post::class);
	}

	public function likes(): BelongsToMany
	{
		return $this->belongsToMany(Post::class, 'post_profile_likes', 'profile_id', 'post_id');
	}

	public function roles()
	{
		return $this->user->belongsToMany(Role::class);
	}

}
