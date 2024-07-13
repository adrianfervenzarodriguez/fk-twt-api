<?php

namespace Src\Tweets\Infrastructure\Repositories;

use App\Models\Tweet;
use Src\Tweets\Domain\Repositories\TweetRepository;

class MySQLTweetRepository implements TweetRepository
{
    public function getTweets(int $limit) : array
    {
        return Tweet::limit($limit)->get()->toArray();
    }
    public function getTweetsByHashtag(string $hashtag, int $limit) : array
    {
        return Tweet::whereJsonContains('hashtags', $hashtag)->limit($limit)->get()->toArray();
    }
}
