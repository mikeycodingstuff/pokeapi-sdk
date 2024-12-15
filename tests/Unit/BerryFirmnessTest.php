<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\BerryFirmness\GetAllBerryFirmnesses;
use PokeApiSdk\Requests\BerryFirmness\GetSingleBerryFirmness;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'berry-firmness/single-id';
    $this->singleFixtureName = 'berry-firmness/single-name';
    $this->allFixture = 'berry-firmness/all';

    $this->singleRequestClass = GetSingleBerryFirmness::class;
    $this->allRequestClass = GetAllBerryFirmnesses::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Berry Firmness', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->berryFirmness()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->berryFirmness()->get('very-soft');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Berry Firmnesses', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->berryFirmness()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
