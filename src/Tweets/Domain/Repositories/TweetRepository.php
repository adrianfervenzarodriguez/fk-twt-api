<?php

namespace Src\Tweets\Domain\Repositories;

interface TweetRepository {
    public function getTweets(int $limit) : array;
    public function getTweetsByHashtag(string $hashtag, int $limit) : array;
}
