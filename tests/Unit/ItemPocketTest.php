<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\ItemPocket\GetAllItemPockets;
use PokeApiSdk\Requests\ItemPocket\GetSingleItemPocket;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'item-pocket/single-id';
    $this->singleFixtureName = 'item-pocket/single-name';
    $this->allFixture = 'item-pocket/all';

    $this->singleRequestClass = GetSingleItemPocket::class;
    $this->allRequestClass = GetAllItemPockets::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Item Pocket', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->itemPocket()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->itemPocket()->get('misc');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Item Pockets', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->itemPocket()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
