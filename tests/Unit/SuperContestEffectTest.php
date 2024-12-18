<?php

declare(strict_types=1);

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\SuperContestEffect\GetAllSuperContestEffects;
use PokeApiSdk\Requests\SuperContestEffect\GetSingleSuperContestEffect;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->endpoint = ResourceEndpoints::SUPER_CONTEST_EFFECT;

    $this->singleFixtureId = "$this->endpoint/single-id";
    $this->singleFixtureName = "$this->endpoint/single-name";
    $this->allFixture = "$this->endpoint/all";

    $this->singleRequestClass = GetSingleSuperContestEffect::class;
    $this->allRequestClass = GetAllSuperContestEffects::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Super Contest Effect', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->superContestEffect()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('throws an exception when receiving a non int param', function () {
        $this->connector->superContestEffect()->get('test');
    })->throws(Exception::class, 'This resource only supports fetching by integer ID.');
});

describe('Get all Super Contest Effects', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->superContestEffect()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
