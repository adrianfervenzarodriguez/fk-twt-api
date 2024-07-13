<?php

namespace Src\Tweets\Infrastructure\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Shared\Infrastructure\Http\Services\ResponseService;
use Src\Tweets\Application\Services\GetAllTweetsService;

class GetAllTweetsController extends Controller
{
    private $handler;

    public function __construct(GetAllTweetsService $handler)
    {
        $this->handler = $handler;
    }

    public function __invoke(Request $request) : JsonResponse
    {
        $tweets = $this->handler->__invoke($request->get('limit') ?? 100);

        return ResponseService::success($tweets);
    }
}
