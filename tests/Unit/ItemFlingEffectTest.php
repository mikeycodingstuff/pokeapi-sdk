<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\ItemFlingEffect\GetAllItemFlingEffects;
use PokeApiSdk\Requests\ItemFlingEffect\GetSingleItemFlingEffect;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'item-fling-effect/single-id';
    $this->singleFixtureName = 'item-fling-effect/single-name';
    $this->allFixture = 'item-fling-effect/all';

    $this->singleRequestClass = GetSingleItemFlingEffect::class;
    $this->allRequestClass = GetAllItemFlingEffects::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Item Fling Effect', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->itemFlingEffect()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->itemFlingEffect()->get('badly-poison');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Item Fling Effects', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->itemFlingEffect()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
