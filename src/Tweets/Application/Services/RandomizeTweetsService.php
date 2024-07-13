<?php

namespace Src\Tweets\Application\Services;

use App\Models\Tweet;
use Illuminate\Support\Facades\DB;

class RandomizeTweetsService
{
    public function __invoke()
    {
        try {
            DB::beginTransaction();
            Tweet::truncate();
            Tweet::factory()->count(1000)->create();

            return true;

        } catch (\Throwable $th) {
            DB::rollBack();

            return false;
        }
    }
}
