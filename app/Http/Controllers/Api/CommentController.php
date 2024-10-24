<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Comment\StoreRequest;
use App\Http\Requests\Api\Comment\UpdateRequest;
use App\Http\Resources\Comment\CommentResource;
use App\Models\Comment;

class CommentController extends Controller
{
	public function create()
	{

	}

	public function index()
	{
		return CommentResource::collection(Comment::all());
	}

	public function show(Comment $comment)
	{
		return CommentResource::make($comment);
	}

	public function edit()
	{

	}

	public function update(UpdateRequest $request, Comment $comment)
	{
		$comment->update($request->validated());

		return $comment;
	}

	public function store(StoreRequest $request)
	{
		$data = $request->validated();

		return Comment::create($data);
	}

	public function destroy(Comment $comment)
	{
		$comment->delete();
		return response([
			'message' => 'comment deleted successfully'
		]);
	}
}
