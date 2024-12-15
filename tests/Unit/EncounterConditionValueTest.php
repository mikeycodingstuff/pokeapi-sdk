<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EncounterConditionValue\GetAllEncounterConditionValues;
use PokeApiSdk\Requests\EncounterConditionValue\GetSingleEncounterConditionValue;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single encounter condition value request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleEncounterConditionValue::class => MockResponse::fixture('encounter-condition-value/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->encounterConditionValue()->get(1);

    $mockClient->assertSent(GetSingleEncounterConditionValue::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('encounter-condition-value/single')->getMockResponse()->body());
});

it('sends an all encounter condition values request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllEncounterConditionValues::class => MockResponse::fixture('encounter-condition-value/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->encounterConditionValue()->all();

    $mockClient->assertSent(GetAllEncounterConditionValues::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('encounter-condition-value/all')->getMockResponse()->body());
});
