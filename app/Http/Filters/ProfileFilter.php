<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProfileFilter extends AbstractFilter
{
	protected array $keys = [
		'name',
		'surname',
		'patronymic',
		'avatar',
		'description',
		'profession',
		'address',
		'phone',
		'birthday_from',
		'birthday_to',
		'gender',
		'user_email',
	];

	protected function name(Builder $builder, $value): void
	{
		$builder->where('name', 'like', "%{$value}%");
	}

	protected function surname(Builder $builder, $value): void
	{
		$builder->where('surname', 'like', "%{$value}%");
	}

	protected function patronymic(Builder $builder, $value): void
	{
		$builder->where('patronymic', 'like', "%{$value}%");
	}

	protected function avatar(Builder $builder, $value): void
	{
		$builder->where('avatar', 'like', "%{$value}%");
	}

	protected function description(Builder $builder, $value): void
	{
		$builder->where('description', 'like', "%{$value}%");
	}

	protected function profession(Builder $builder, $value): void
	{
		$builder->where('profession', 'like', "%{$value}%");
	}

	protected function address(Builder $builder, $value): void
	{
		$builder->where('address', 'like', "%{$value}%");
	}

	protected function phone(Builder $builder, $value): void
	{
		$builder->where('phone', 'like', "%{$value}%");
	}

	protected function userEmail(Builder $builder, $value): void
	{
		$builder->whereRelation('user', 'email', 'like', "%{$value}%");
	}

	protected function birthdayFrom(Builder $builder, $value): void
	{
		$builder->where('birthday_from', '>=', $value);
	}

	protected function birthdayTo(Builder $builder, $value): void
	{
		$builder->where('birthday_to', '<=', $value);
	}

	protected function gender(Builder $builder, $value): void
	{
		$builder->where('gender', '=', $value);
	}


}
