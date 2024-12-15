<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EggGroup\GetAllEggGroups;
use PokeApiSdk\Requests\EggGroup\GetSingleEggGroup;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('sends a single egg group request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetSingleEggGroup::class => MockResponse::fixture('egg-group/single'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->eggGroup()->get(1);

    $mockClient->assertSent(GetSingleEggGroup::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('egg-group/single')->getMockResponse()->body());
});

it('sends an all egg groups request and receives the expected response', function () {
    $mockClient = new MockClient([
        GetAllEggGroups::class => MockResponse::fixture('egg-group/all'),
    ]);

    $connector = new PokeApi;
    $connector->withMockClient($mockClient);

    $response = $connector->eggGroup()->all();

    $mockClient->assertSent(GetAllEggGroups::class);
    $mockClient->assertSentCount(1);

    expect($response)
        ->toBeInstanceOf(PokeApiResponse::class)
        ->and($response->successful())
        ->toBeTrue()
        ->and($response->body())
        ->toEqual(MockResponse::fixture('egg-group/all')->getMockResponse()->body());
});
