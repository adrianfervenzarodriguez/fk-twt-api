<?php

return [
    App\Providers\AppServiceProvider::class,
    Src\Tweets\Infrastructure\Providers\TweetsCommandServiceProvider::class,
    Src\Shared\Infrastructure\Providers\SharedCommandServiceProvider::class,
];
