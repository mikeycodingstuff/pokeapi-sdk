<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\BerryFlavor\GetAllBerryFlavors;
use PokeApiSdk\Requests\BerryFlavor\GetSingleBerryFlavor;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single berry flavor request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleBerryFlavor::class => MockResponse::fixture('berry-flavor/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->berryFlavor()->get(1);

    $mockClient->assertSent(GetSingleBerryFlavor::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('berry-flavor/single')->getMockResponse()->body());
});

it('sends an all berry flavors request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllBerryFlavors::class => MockResponse::fixture('berry-flavor/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->berryFlavor()->all();

    $mockClient->assertSent(GetAllBerryFlavors::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('berry-flavor/all')->getMockResponse()->body());
});
