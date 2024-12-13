<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Pokemon\GetAllPokemon;
use PokeApiSdk\Requests\Pokemon\GetSinglePokemon;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single pokemon request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSinglePokemon::class => MockResponse::fixture('pokemon/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->pokemon()->get('metagross');

    $mockClient->assertSent(GetSinglePokemon::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('pokemon/single')->getMockResponse()->body());
});

it('sends an all pokemon request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllPokemon::class => MockResponse::fixture('pokemon/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->pokemon()->all();

    $mockClient->assertSent(GetAllPokemon::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('pokemon/all')->getMockResponse()->body());
});
