<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EncounterCondition\GetAllEncounterConditions;
use PokeApiSdk\Requests\EncounterCondition\GetSingleEncounterCondition;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'encounter-condition/single-id';
    $this->singleFixtureName = 'encounter-condition/single-name';
    $this->allFixture = 'encounter-condition/all';

    $this->singleRequestClass = GetSingleEncounterCondition::class;
    $this->allRequestClass = GetAllEncounterConditions::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Encounter Condition', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->encounterCondition()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->encounterCondition()->get('swarm');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Encounter Conditions', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->encounterCondition()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
