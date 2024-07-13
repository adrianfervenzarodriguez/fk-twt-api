<?php

namespace Src\Tweets\Infrastructure\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Src\Shared\Infrastructure\Http\Services\ResponseService;
use Src\Tweets\Application\Services\RandomizeTweetsService;

class RandomizeTweetsController extends Controller
{
    private $tweetsRandomizer;

    public function __construct(RandomizeTweetsService $tweetsRandomizer)
    {
        $this->tweetsRandomizer = $tweetsRandomizer;
    }

    public function __invoke(Request $request) : JsonResponse
    {
        if ($this->tweetsRandomizer->__invoke()){
            return ResponseService::success(['result' => 'Randomize completed.']);
        }

        return ResponseService::error('Error randomizing data.');
    }

}
