<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Ability\GetAllAbilities;
use PokeApiSdk\Requests\Ability\GetSingleAbility;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'ability/single-id';
    $this->singleFixtureName = 'ability/single-name';
    $this->allFixture = 'ability/all';

    $this->singleRequestClass = GetSingleAbility::class;
    $this->allRequestClass = GetAllAbilities::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Ability', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->ability()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->ability()->get('stench');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Abilities', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->ability()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
