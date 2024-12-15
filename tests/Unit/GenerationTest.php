<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Generation\GetAllGenerations;
use PokeApiSdk\Requests\Generation\GetSingleGeneration;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'generation/single-id';
    $this->singleFixtureName = 'generation/single-name';
    $this->allFixture = 'generation/all';

    $this->singleRequestClass = GetSingleGeneration::class;
    $this->allRequestClass = GetAllGenerations::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Generation', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->generation()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->generation()->get('generation-i');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Generations', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->generation()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
