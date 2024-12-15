<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EncounterMethod\GetAllEncounterMethods;
use PokeApiSdk\Requests\EncounterMethod\GetSingleEncounterMethod;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single encounter method request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleEncounterMethod::class => MockResponse::fixture('encounter-method/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->encounterMethod()->get(1);

    $mockClient->assertSent(GetSingleEncounterMethod::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('encounter-method/single')->getMockResponse()->body());
});

it('sends an all encounter methods request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllEncounterMethods::class => MockResponse::fixture('encounter-method/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->encounterMethod()->all();

    $mockClient->assertSent(GetAllEncounterMethods::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('encounter-method/all')->getMockResponse()->body());
});
