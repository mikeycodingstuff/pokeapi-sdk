<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EncounterMethod\GetAllEncounterMethods;
use PokeApiSdk\Requests\EncounterMethod\GetSingleEncounterMethod;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'encounter-method/single-id';
    $this->singleFixtureName = 'encounter-method/single-name';
    $this->allFixture = 'encounter-method/all';

    $this->singleRequestClass = GetSingleEncounterMethod::class;
    $this->allRequestClass = GetAllEncounterMethods::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Encounter Method', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->encounterMethod()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->encounterMethod()->get('walk');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Encounter Methods', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->encounterMethod()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
