<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tag\StoreRequest;
use App\Http\Requests\Api\Tag\UpdateRequest;
use App\Http\Resources\Tag\TagResource;
use App\Models\Tag;

class TagController extends Controller
{
	public function create()
	{

	}

	public function index()
	{
		return TagResource::collection(Tag::all());
	}

	public function show(Tag $tag)
	{
		return TagResource::make($tag);
	}

	public function edit()
	{

	}

	public function update(UpdateRequest $request, Tag $tag)
	{
		$tag->update($request->validated());

		return $tag;
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();

		return Tag::create($data);
	}

	public function destroy(Tag $tag)
	{
		$tag->delete();
		return response([
			'message' => 'tag deleted successfully'
		]);
	}
}
