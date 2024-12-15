<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Gender\GetAllGenders;
use PokeApiSdk\Requests\Gender\GetSingleGender;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single gender request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleGender::class => MockResponse::fixture('gender/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->gender()->get(1);

    $mockClient->assertSent(GetSingleGender::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('gender/single')->getMockResponse()->body());
});

it('sends an all genders request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllGenders::class => MockResponse::fixture('gender/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->gender()->all();

    $mockClient->assertSent(GetAllGenders::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('gender/all')->getMockResponse()->body());
});
