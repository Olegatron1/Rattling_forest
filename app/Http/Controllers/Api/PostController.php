<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Post\StoreRequest;
use App\Http\Requests\Api\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostController extends Controller
{
	public function create()
	{

	}

	public function index()
	{
		return PostResource::collection(Post::all());
	}

	public function show(Post $post)
	{
		return PostResource::make($post);
	}

	public function edit()
	{

	}

	public function update(UpdateRequest $request, Post $post)
	{
		$post->update($request->validated());

		return $post;
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();

		return Post::create($data);
	}

	public function destroy(Post $post)
	{
		$post->delete();
		return response([
			'message' => 'post deleted successfully'
		]);
	}
}
