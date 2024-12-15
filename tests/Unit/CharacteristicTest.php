<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Characteristic\GetAllCharacteristics;
use PokeApiSdk\Requests\Characteristic\GetSingleCharacteristic;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single characteristic request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleCharacteristic::class => MockResponse::fixture('characteristic/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->characteristic()->get(1);

    $mockClient->assertSent(GetSingleCharacteristic::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('characteristic/single')->getMockResponse()->body());
});

it('sends an all characteristics request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllCharacteristics::class => MockResponse::fixture('characteristic/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->characteristic()->all();

    $mockClient->assertSent(GetAllCharacteristics::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('characteristic/all')->getMockResponse()->body());
});
