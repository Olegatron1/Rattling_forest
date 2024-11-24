<?php

namespace App\Exceptions;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Throwable;

class PostException extends Exception
{

    public function __construct(private Post $post, string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Report the exception.
     */
    public function report(): void
    {
        Log::channel('post')->info('post with id {id} already exists', ['id' => $this->post->id]);
    }

    /**
     * Render the exception as an HTTP response.
     */
    public function render(Request $request)
    {
        return response()->json([
            'message' => $this->message
        ], $this->code);
    }

    public static function isAlreadyExists($post)
    {

        if (!$post->wasRecentlyCreated) {
            throw new self($post,'already Exists', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

    }
}
