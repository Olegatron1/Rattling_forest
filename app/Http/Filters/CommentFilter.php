<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CommentFilter extends AbstractFilter
{
	protected array $keys = [
		'title',
		'content',
		'published_at_from',
		'published_at_to',
		'profile_name',
	];

	protected function title(Builder $builder, $value): void
	{
		$builder->where('title', 'like', "%{$value}%");
	}

	protected function content(Builder $builder, $value): void
	{
		$builder->where('content', 'like', "%{$value}%");
	}

	protected function publishedAtFrom(Builder $builder, $value): void
	{
		$builder->where('published_at', '>=', $value);
	}

	protected function publishedAtTo(Builder $builder, $value): void
	{
		$builder->where('published_at', '<=', $value);
	}

	protected function profileName(Builder $builder, $value): void
	{
		$builder->whereRelation('profile', 'name', 'like', "%{$value}%");
	}
}