<?php

namespace Src\Tweets\Infrastructure\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Shared\Infrastructure\Http\Services\ResponseService;
use Src\Tweets\Application\Services\GetTweetsByHashtagService;

class GetTweetsByHashtagController extends Controller
{
    private $handler;

    public function __construct(GetTweetsByHashtagService $handler)
    {
        $this->handler = $handler;
    }

    public function __invoke(Request $request, $hashtag) : JsonResponse
    {
        $tweets = $this->handler->__invoke($hashtag, $request->get('limit') ?? 100);

        return ResponseService::success($tweets);
    }
}
