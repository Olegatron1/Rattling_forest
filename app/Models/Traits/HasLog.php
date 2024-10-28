<?php

namespace App\Models\Traits;

use App\Models\Log;
use Illuminate\Database\Eloquent\Model;

trait HasLog
{
	public static function bootHasLog(): void
	{
		static::created(function (Model $model) {
			Log::create([
				'model' => $model::class,
				'event' => 'created',
				'old_value' => null,
				'dirty' => json_encode($model->getAttributes()),
			]);
		});

		static::updated(function (Model $model) {
			Log::create([
				'model' => $model::class,
				'event' => 'updated',
				'old_value' => json_encode($model->getOriginal()),
				'dirty' => json_encode($model->getDirty()),
			]);
		});

		static::deleted(function (Model $model) {
			Log::create([
				'model' => $model::class,
				'event' => 'deleted',
				'old_value' => json_encode($model->getAttributes()),
				'dirty' => null,
			]);
		});

		static::retrieved(function (Model $model) {
			Log::create([
				'model' => $model::class,
				'event' => 'retrieved',
				'old_value' => json_encode($model->getAttributes()),
				'dirty' => null,
			]);
		});
    }
}
