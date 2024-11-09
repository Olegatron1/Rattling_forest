<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
	use SoftDeletes;

    const ADMIN = 1;
    const EDITOR = 2;


	protected $guarded = false;

    public static function getRoles(): array
    {
        return [
            self::ADMIN => 'admin',
            self::EDITOR => 'editor',
        ];
    }

	public function users(): BelongsToMany
	{
		return $this->belongsToMany(User::class);
	}
}
