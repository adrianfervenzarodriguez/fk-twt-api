<?php

namespace Src\Tweets\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Tweets\Infrastructure\CLI\Commands\RandomizeTweetsCommand;

class TweetsCommandServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            RandomizeTweetsCommand::class,
        ]);
    }
}
