<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Profile\StoreRequest;
use App\Http\Requests\Api\Profile\UpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;

class ProfileController extends Controller
{
	public function create()
	{

	}

	public function index()
	{
		return ProfileResource::collection(Profile::all());
	}

	public function show(Profile $profile)
	{
		return ProfileResource::make($profile);
	}

	public function edit()
	{

	}

	public function update(UpdateRequest $request, Profile $profile)
	{
		$profile->update($request->validated());

		return $profile;
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();

		return Profile::create($data);
	}

	public function destroy(Profile $profile)
	{
		$profile->delete();
		return response([
			'message' => 'profile deleted successfully'
		]);
	}
}
