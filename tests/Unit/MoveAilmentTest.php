<?php

declare(strict_types=1);

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\MoveAilment\GetAllMoveAilments;
use PokeApiSdk\Requests\MoveAilment\GetSingleMoveAilment;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->endpoint = ResourceEndpoints::MOVE_AILMENT;

    $this->singleFixtureId = "$this->endpoint/single-id";
    $this->singleFixtureName = "$this->endpoint/single-name";
    $this->allFixture = "$this->endpoint/all";

    $this->singleRequestClass = GetSingleMoveAilment::class;
    $this->allRequestClass = GetAllMoveAilments::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Move Ailment', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->moveAilment()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->moveAilment()->get('paralysis');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Move Ailments', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->moveAilment()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
