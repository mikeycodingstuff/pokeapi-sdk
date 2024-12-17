<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\GrowthRate\GetAllGrowthRates;
use PokeApiSdk\Requests\GrowthRate\GetSingleGrowthRate;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'growth-rate/single-id';
    $this->singleFixtureName = 'growth-rate/single-name';
    $this->allFixture = 'growth-rate/all';

    $this->singleRequestClass = GetSingleGrowthRate::class;
    $this->allRequestClass = GetAllGrowthRates::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Growth Rate', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->growthRate()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->growthRate()->get('slow');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Growth Rates', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->growthRate()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
