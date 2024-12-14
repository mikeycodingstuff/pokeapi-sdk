<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\BerryFirmness\GetAllBerryFirmnesses;
use PokeApiSdk\Requests\BerryFirmness\GetSingleBerryFirmness;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single berry firmness request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleBerryFirmness::class => MockResponse::fixture('berry-firmness/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->berryFirmness()->get(1);

    $mockClient->assertSent(GetSingleBerryFirmness::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('berry-firmness/single')->getMockResponse()->body());
});

it('sends an all berry firmnesses request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllBerryFirmnesses::class => MockResponse::fixture('berry-firmness/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->berryFirmness()->all();

    $mockClient->assertSent(GetAllBerryFirmnesses::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('berry-firmness/all')->getMockResponse()->body());
});
