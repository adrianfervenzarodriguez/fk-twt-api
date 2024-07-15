<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class ApplicationTest extends TestCase
{
    public function test_tweets_endpoint_returns_a_successful_response(): void
    {
        $user = User::factory()->create();
        $this->actingAs(User::find($user->id), 'web');
        $response = $this->get('/tweets/hashtag/farina');

        $this->assertCount(100, $response['data']);
        $response->assertStatus(200);
    }

    public function test_tweets_endpoint_with_farina_hashtag_should_return_100_items() : void
    {
        $user = User::factory()->create();
        $this->actingAs(User::find($user->id), 'web');
        $response = $this->get('/tweets/hashtag/farina');

        $this->assertCount(100, $response['data']);
    }

    public function test_tweets_endpoint_with_unexists_hashtag_should_return_0_items() : void
    {
        $user = User::factory()->create();
        $this->actingAs(User::find($user->id), 'web');
        $response = $this->get('/tweets/hashtag/this_hashtag_not_exists');

        $this->assertCount(0, $response['data']);
    }

    public function test_tweets_database_should_have_1000_items() : void
    {
        $this->assertDatabaseCount('tweets', 1000);
    }

}
