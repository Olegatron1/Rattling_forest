<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
	protected array $keys = [
		'title',
		'category_title',
		'profile_name',
		'views_from',
		'views_to',
		'published_at_from',
		'published_at_to',
		'likes_from',
		'likes_to',
		'content',
		'description',
		'is_active',
		'status',
	];


	protected function title(Builder $builder, $value): void
	{
		$builder->where('title', 'like', "%{$value}%");
	}

	protected function content(Builder $builder, $value): void
	{
		$builder->where('content', 'like', "%{$value}%");
	}

	protected function description(Builder $builder, $value): void
	{
		$builder->where('description', 'like', "%{$value}%");
	}

	protected function categoryTitle(Builder $builder, $value): void
	{
		$builder->whereRelation('category', 'title', 'like', "%{$value}%");
	}

	protected function profileName(Builder $builder, $value): void
	{
		$builder->whereRelation('profile', 'name', 'like', "%{$value}%");
	}

	protected function viewsFrom(Builder $builder, $value): void
	{
		$builder->where('views', '>=', $value);
	}

	protected function viewsTo(Builder $builder, $value): void
	{
		$builder->where('views', '<=', $value);
	}

	protected function likesFrom(Builder $builder, $value): void
	{
		$builder->where('likes', '>=', $value);
	}

	protected function likesTo(Builder $builder, $value): void
	{
		$builder->where('likes', '<=', $value);
	}

	protected function publishedAtFrom(Builder $builder, $value): void
	{
		$builder->where('published_at', '>=', $value);
	}

	protected function publishedAtTo(Builder $builder, $value): void
	{
		$builder->where('published_at', '<=', $value);
	}

	protected function isActive(Builder $builder, $value): void
	{
		$builder->where('is_active', '=', $value);
	}

	protected function status(Builder $builder, $value): void
	{
		$builder->where('status', '=', $value);
	}
}
