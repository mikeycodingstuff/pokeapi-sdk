<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Pokedex\GetAllPokedexes;
use PokeApiSdk\Requests\Pokedex\GetSinglePokedex;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single pokedex request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSinglePokedex::class => MockResponse::fixture('pokedex/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->pokedex()->get(1);

    $mockClient->assertSent(GetSinglePokedex::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('pokedex/single')->getMockResponse()->body());
});

it('sends an all pokedex request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllPokedexes::class => MockResponse::fixture('pokedex/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->pokedex()->all();

    $mockClient->assertSent(GetAllPokedexes::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('pokedex/all')->getMockResponse()->body());
});
