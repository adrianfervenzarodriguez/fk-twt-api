<?php

namespace Src\Tweets\Application\Services;

use App\Models\Tweet;
use Illuminate\Support\Facades\DB;

class RandomizeTweetsService
{
    const TWEETS_FILE_PATH = "/src/Tweets/Domain/Data/tweets.json";

    private function updateTweetsContent()
    {
        $jsonDatabase = [...array_unique(json_decode(file_get_contents(base_path() . self::TWEETS_FILE_PATH)))];
        shuffle($jsonDatabase);
        $counter = 0;
        foreach (Tweet::all() as $tweet) {
            $newContent = $jsonDatabase[$counter];
            $tweet->content = $newContent;
            $tweet->save();
            $counter++;
        }
    }

    public function __invoke()
    {
        try {
            DB::beginTransaction();
            Tweet::truncate();
            Tweet::factory()->count(1000)->create();

            $this->updateTweetsContent();

            return true;

        } catch (\Throwable $th) {
            DB::rollBack();

            return false;
        }
    }
}
