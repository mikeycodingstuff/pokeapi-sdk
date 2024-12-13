<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Ability\GetAllAbilities;
use PokeApiSdk\Requests\Ability\GetSingleAbility;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single ability request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleAbility::class => MockResponse::fixture('ability/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->ability()->get(1);

    $mockClient->assertSent(GetSingleAbility::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('ability/single')->getMockResponse()->body());
});

it('sends an all ability request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllAbilities::class => MockResponse::fixture('ability/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->ability()->all();

    $mockClient->assertSent(GetAllAbilities::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('ability/all')->getMockResponse()->body());
});
