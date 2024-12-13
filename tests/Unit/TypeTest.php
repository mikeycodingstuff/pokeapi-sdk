<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Type\GetAllTypes;
use PokeApiSdk\Requests\Type\GetSingleType;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single type request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleType::class => MockResponse::fixture('type/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->type()->get('ghost');

    $mockClient->assertSent(GetSingleType::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('type/single')->getMockResponse()->body());
});

it('sends an all type request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllTypes::class => MockResponse::fixture('type/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->type()->all();

    $mockClient->assertSent(GetAllTypes::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('type/all')->getMockResponse()->body());
});
