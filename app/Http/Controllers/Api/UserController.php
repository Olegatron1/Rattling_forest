<?php

namespace App\Http\Controllers\Api;

use App\Events\User\UserCreatedEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\StoreRequest;
use App\Http\Requests\Api\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function create()
	{

	}

	public function index()
	{
		return UserResource::collection(User::all());
	}

	public function show(User $user)
	{
		return UserResource::make($user);
	}

	public function edit()
	{

	}

	public function update(UpdateRequest $request, User $user)
	{
		$user->update($request->validated());

		return $user;
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();

		$user = User::create($data);

		UserCreatedEvent::dispatch($user);

		return $user;
	}

	public function destroy(User $user)
	{
		$user->delete();
		return response([
			'message' => 'user deleted successfully'
		]);
	}
}
