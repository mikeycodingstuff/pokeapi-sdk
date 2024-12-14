<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Species\GetAllSpecies;
use PokeApiSdk\Requests\Species\GetSingleSpecies;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single species request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleSpecies::class => MockResponse::fixture('species/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->species()->get(1);

    $mockClient->assertSent(GetSingleSpecies::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('species/single')->getMockResponse()->body());
});

it('sends an all species request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllSpecies::class => MockResponse::fixture('species/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->species()->all();

    $mockClient->assertSent(GetAllSpecies::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('species/all')->getMockResponse()->body());
});
