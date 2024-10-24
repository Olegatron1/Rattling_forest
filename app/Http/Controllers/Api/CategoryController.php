<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Category\StoreRequest;
use App\Http\Requests\Api\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
	public function create()
	{

	}

	public function index()
	{
		return CategoryResource::collection(Category::all());
	}

	public function show(Category $category)
	{
		return CategoryResource::make($category);
	}

	public function edit()
	{

	}

	public function update(UpdateRequest $request, Category $category)
	{
		$category->update($request->validated());

		return $category;
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();

		return Category::create($data);
	}

	public function destroy(Category $category)
	{
		$category->delete();
		return response([
			'message' => 'category deleted successfully'
		]);
	}
}
