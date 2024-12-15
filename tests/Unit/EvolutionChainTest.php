<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EvolutionChain\GetAllEvolutionChains;
use PokeApiSdk\Requests\EvolutionChain\GetSingleEvolutionChain;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single evolution chain request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleEvolutionChain::class => MockResponse::fixture('evolution-chain/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->evolutionChain()->get(1);

    $mockClient->assertSent(GetSingleEvolutionChain::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('evolution-chain/single')->getMockResponse()->body());
});

it('sends an all evolution chains request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllEvolutionChains::class => MockResponse::fixture('evolution-chain/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->evolutionChain()->all();

    $mockClient->assertSent(GetAllEvolutionChains::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('evolution-chain/all')->getMockResponse()->body());
});
