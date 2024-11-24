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

            \Illuminate\Support\Facades\Log::channel('business')->info(
                "Model created: " . $model::class . " with ID: " . $model->id
            );
		});

		static::updated(function (Model $model) {
			Log::create([
				'model' => $model::class,
				'event' => 'updated',
				'old_value' => json_encode($model->getOriginal()),
				'dirty' => json_encode($model->getDirty()),
			]);

            \Illuminate\Support\Facades\Log::channel('business')->info(
                "Model updated: " . $model::class . " with ID: " . $model->id
            );
		});

		static::deleted(function (Model $model) {
			Log::create([
				'model' => $model::class,
				'event' => 'deleted',
				'old_value' => json_encode($model->getAttributes()),
				'dirty' => null,
			]);

            \Illuminate\Support\Facades\Log::channel('business')->info(
                "Model deleted: " . $model::class . " with ID: " . $model->id
            );
		});

		static::retrieved(function (Model $model) {
			Log::create([
				'model' => $model::class,
				'event' => 'retrieved',
				'old_value' => json_encode($model->getAttributes()),
				'dirty' => null,
			]);

            \Illuminate\Support\Facades\Log::channel('business')->info(
                "Model retrieved: " . $model::class . " with ID: " . $model->id
            );
		});
    }
}
