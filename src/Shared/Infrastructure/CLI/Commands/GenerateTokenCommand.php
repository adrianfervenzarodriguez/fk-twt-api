<?php

namespace Src\Shared\Infrastructure\CLI\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class GenerateTokenCommand extends Command
{
    protected $signature = 'generate:token';
    protected $description = 'Generate new random user and return an access token';

    public function handle()
    {
        $user = User::factory()->create();
        $token = $user->createToken('auth-token')->plainTextToken;

        $this->info("Token successfully generated: {$token}");

        return 0;
    }
}
