<?php

namespace Src\Tweets\Infrastructure\CLI\Commands;

use Illuminate\Console\Command;
use Src\Tweets\Application\Services\RandomizeTweetsService;

class RandomizeTweetsCommand extends Command
{
    protected $signature = "tweets:randomize";
    protected $description = "Replace current tweets database to new fake data";

    private $tweetsRandomizer;

    public function __construct(RandomizeTweetsService $tweetsRandomizer)
    {
        parent::__construct();
        $this->tweetsRandomizer = $tweetsRandomizer;
    }

    public function handle()
    {
        if ($this->tweetsRandomizer->__invoke()){
            $this->info("Randomize successfully completed.");

            return 0;
        }

        $this->error("Error randomizing tweets.");

        return 1;
    }

}
