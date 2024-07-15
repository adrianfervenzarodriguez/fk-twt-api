<?php

namespace Src\Shared\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Src\Shared\Infrastructure\CLI\Commands\GenerateTokenCommand;

class SharedCommandServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            GenerateTokenCommand::class,
        ]);
    }
}

