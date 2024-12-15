<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\ContestEffect\GetAllContestEffects;
use PokeApiSdk\Requests\ContestEffect\GetSingleContestEffect;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'contest-effect/single-id';
    $this->singleFixtureName = 'contest-effect/single-name';
    $this->allFixture = 'contest-effect/all';

    $this->singleRequestClass = GetSingleContestEffect::class;
    $this->allRequestClass = GetAllContestEffects::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Contest Effect', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->contestEffect()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('throws an exception when receiving a non int param', function () {
        $this->connector->contestEffect()->get('test');
    })->throws(Exception::class, 'This resource only supports fetching by integer ID.');
});

describe('Get all Contest Effects', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->contestEffect()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
