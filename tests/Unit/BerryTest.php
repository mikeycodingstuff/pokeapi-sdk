<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Berry\GetAllBerries;
use PokeApiSdk\Requests\Berry\GetSingleBerry;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'berry/single-id';
    $this->singleFixtureName = 'berry/single-name';
    $this->allFixture = 'berry/all';

    $this->singleRequestClass = GetSingleBerry::class;
    $this->allRequestClass = GetAllBerries::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Berry', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->berry()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('sends a request with a name (string) and receives the expected response', function () {
        $this->mockClient = new MockClient([
            $this->singleRequestClass => MockResponse::fixture($this->singleFixtureName),
        ]);

        $this->connector->withMockClient($this->mockClient);

        $response = $this->connector->berry()->get('cheri');

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureName);
    });
});

describe('Get all Berries', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->berry()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
