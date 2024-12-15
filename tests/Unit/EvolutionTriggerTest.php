<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EvolutionTrigger\GetAllEvolutionTriggers;
use PokeApiSdk\Requests\EvolutionTrigger\GetSingleEvolutionTrigger;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single evolution trigger request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleEvolutionTrigger::class => MockResponse::fixture('evolution-trigger/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->evolutionTrigger()->get(1);

    $mockClient->assertSent(GetSingleEvolutionTrigger::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('evolution-trigger/single')->getMockResponse()->body());
});

it('sends an all evolution triggers request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllEvolutionTriggers::class => MockResponse::fixture('evolution-trigger/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->evolutionTrigger()->all();

    $mockClient->assertSent(GetAllEvolutionTriggers::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('evolution-trigger/all')->getMockResponse()->body());
});
