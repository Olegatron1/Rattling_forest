<?php

namespace App\Models;

use App\Models\Traits\HasFilter;
use App\Models\Traits\HasLog;
use App\Observers\ProfileObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy(ProfileObserver::class)]
class Profile extends Model
{
    use HasFactory;
	use SoftDeletes;
	use HasLog;
	use HasFilter;

    protected $guarded = false;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function comments(): HasMany
	{
		return $this->hasMany(Comment::class);
	}

	public function likedPosts(): MorphToMany
	{
		return $this->morphedByMany(Post::class, 'likeable');
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
