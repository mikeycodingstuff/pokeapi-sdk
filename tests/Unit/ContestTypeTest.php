<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\ContestType\GetAllContestTypes;
use PokeApiSdk\Requests\ContestType\GetSingleContestType;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single contest type request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleContestType::class => MockResponse::fixture('contest-type/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->contestType()->get(1);

    $mockClient->assertSent(GetSingleContestType::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('contest-type/single')->getMockResponse()->body());
});

it('sends an all contest types request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllContestTypes::class => MockResponse::fixture('contest-type/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->contestType()->all();

    $mockClient->assertSent(GetAllContestTypes::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('contest-type/all')->getMockResponse()->body());
});
