<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Role\StoreRequest;
use App\Http\Requests\Api\Role\UpdateRequest;
use App\Http\Resources\Role\RoleResource;
use App\Models\Role;

class RoleController extends Controller
{
	public function create()
	{

	}

	public function index()
	{
		return RoleResource::collection(Role::all());
	}

	public function show(Role $role)
	{
		return RoleResource::make($role);
	}

	public function edit()
	{

	}

	public function update(UpdateRequest $request, Role $role)
	{
		$role->update($request->validated());

		return $role;
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();

		return Role::create($data);
	}

	public function destroy(Role $role)
	{
		$role->delete();
		return response([
			'message' => 'role deleted successfully'
		]);
	}
}
