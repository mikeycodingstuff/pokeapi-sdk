<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\ContestEffect\GetAllContestEffects;
use PokeApiSdk\Requests\ContestEffect\GetSingleContestEffect;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single contest effect request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleContestEffect::class => MockResponse::fixture('contest-effect/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->contestEffect()->get(1);

    $mockClient->assertSent(GetSingleContestEffect::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('contest-effect/single')->getMockResponse()->body());
});

it('sends an all contest effects request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllContestEffects::class => MockResponse::fixture('contest-effect/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->contestEffect()->all();

    $mockClient->assertSent(GetAllContestEffects::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('contest-effect/all')->getMockResponse()->body());
});
