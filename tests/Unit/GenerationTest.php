<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Generation\GetAllGenerations;
use PokeApiSdk\Requests\Generation\GetSingleGeneration;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single generation request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleGeneration::class => MockResponse::fixture('generation/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->generation()->get(1);

    $mockClient->assertSent(GetSingleGeneration::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('generation/single')->getMockResponse()->body());
});

it('sends an all generations request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllGenerations::class => MockResponse::fixture('generation/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->generation()->all();

    $mockClient->assertSent(GetAllGenerations::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('generation/all')->getMockResponse()->body());
});
