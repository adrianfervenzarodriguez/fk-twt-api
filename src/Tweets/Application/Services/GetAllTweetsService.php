<?php

namespace Src\Tweets\Application\Services;

use Src\Tweets\Domain\Repositories\TweetRepository;

class GetAllTweetsService
{
    private $tweetRepository;

    public function __construct(TweetRepository $tweetRepository)
    {
        $this->tweetRepository = $tweetRepository;
    }

    public function __invoke(int $limit)
    {
        return $this->tweetRepository->getTweets($limit);
    }

}
