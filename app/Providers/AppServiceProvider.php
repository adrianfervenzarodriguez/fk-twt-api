<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Tweets\Domain\Repositories\TweetRepository;
use Src\Tweets\Infrastructure\Repositories\MySQLTweetRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TweetRepository::class, MySQLTweetRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
