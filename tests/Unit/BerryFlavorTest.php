<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\BerryFlavor\GetAllBerryFlavors;
use PokeApiSdk\Requests\BerryFlavor\GetSingleBerryFlavor;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'berry-flavor/single-id';
    $this->singleFixtureName = 'berry-flavor/single-name';
    $this->allFixture = 'berry-flavor/all';

    $this->singleRequestClass = GetSingleBerryFlavor::class;
    $this->allRequestClass = GetAllBerryFlavors::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Berry Flavor', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->berryFlavor()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->berryFlavor()->get('spicy');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Berry Flavors', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->berryFlavor()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
