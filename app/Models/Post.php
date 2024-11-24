<?php

namespace App\Models;

use App\Http\Filters\PostFilter;
use App\Models\Traits\HasFilter;
use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy(PostObserver::class)]
class Post extends Model
{
    use HasFactory;
	use SoftDeletes;
	use HasFilter;

    protected $guarded = false;

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}

	public function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}

	public function profiles(): BelongsToMany
	{
		return $this->belongsToMany(Profile::class);
	}

	public function profile(): BelongsTo
	{
		return $this->belongsTo(Profile::class);
	}

	public function likes(): BelongsToMany
	{
		return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id', 'profile_id');
	}

	public function comments(): MorphMany
	{
		return $this->morphMany(Comment::class, 'commentable');
	}

	public function likedByProfiles(): MorphToMany
	{
		return $this->morphToMany(Profile::class, 'likeable');
	}
	
}
