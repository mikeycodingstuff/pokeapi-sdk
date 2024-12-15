<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EncounterCondition\GetAllEncounterConditions;
use PokeApiSdk\Requests\EncounterCondition\GetSingleEncounterCondition;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single encounter condition request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleEncounterCondition::class => MockResponse::fixture('encounter-condition/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->encounterCondition()->get(1);

    $mockClient->assertSent(GetSingleEncounterCondition::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('encounter-condition/single')->getMockResponse()->body());
});

it('sends an all encounter conditions request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllEncounterConditions::class => MockResponse::fixture('encounter-condition/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->encounterCondition()->all();

    $mockClient->assertSent(GetAllEncounterConditions::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('encounter-condition/all')->getMockResponse()->body());
});
