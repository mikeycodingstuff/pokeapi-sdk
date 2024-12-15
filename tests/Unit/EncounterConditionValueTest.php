<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EncounterConditionValue\GetAllEncounterConditionValues;
use PokeApiSdk\Requests\EncounterConditionValue\GetSingleEncounterConditionValue;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'encounter-condition-value/single-id';
    $this->singleFixtureName = 'encounter-condition-value/single-name';
    $this->allFixture = 'encounter-condition-value/all';

    $this->singleRequestClass = GetSingleEncounterConditionValue::class;
    $this->allRequestClass = GetAllEncounterConditionValues::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Encounter Condition Value', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->encounterConditionValue()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->encounterConditionValue()->get('swarm-yes');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Encounter Condition Values', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->encounterConditionValue()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
