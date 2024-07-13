<?php

namespace Src\Tweets\Application\Services;

use Src\Tweets\Domain\Repositories\TweetRepository;

class GetTweetsByHashtagService
{
    private $tweetRepository;

    public function __construct(TweetRepository $tweetRepository)
    {
        $this->tweetRepository = $tweetRepository;
    }

    public function __invoke(string $hashtag, int $limit)
    {
        return $this->tweetRepository->getTweetsByHashtag($hashtag, $limit);
    }

}
