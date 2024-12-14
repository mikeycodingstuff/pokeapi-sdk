<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Berry\GetAllBerries;
use PokeApiSdk\Requests\Berry\GetSingleBerry;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single berry request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleBerry::class => MockResponse::fixture('berry/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->berry()->get(1);

    $mockClient->assertSent(GetSingleBerry::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('berry/single')->getMockResponse()->body());
});

it('sends an all berry request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllBerries::class => MockResponse::fixture('berry/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->berry()->all();

    $mockClient->assertSent(GetAllBerries::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('berry/all')->getMockResponse()->body());
});
