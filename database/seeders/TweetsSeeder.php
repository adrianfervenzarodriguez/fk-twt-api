<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Src\Tweets\Application\Services\RandomizeTweetsService;

class TweetsSeeder extends Seeder
{
    public function run(): void
    {
        $service = new RandomizeTweetsService();
        $service->__invoke();
    }
}
