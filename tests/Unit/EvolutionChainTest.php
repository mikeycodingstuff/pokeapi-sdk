<?php

declare(strict_types=1);

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\EvolutionChain\GetAllEvolutionChains;
use PokeApiSdk\Requests\EvolutionChain\GetSingleEvolutionChain;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->endpoint = ResourceEndpoints::EVOLUTION_CHAIN;

    $this->singleFixtureId = "$this->endpoint/single-id";
    $this->singleFixtureName = "$this->endpoint/single-name";
    $this->allFixture = "$this->endpoint/all";

    $this->singleRequestClass = GetSingleEvolutionChain::class;
    $this->allRequestClass = GetAllEvolutionChains::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Evolution Chain', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->evolutionChain()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('throws an exception when receiving a non int param', function () {
        $this->connector->evolutionChain()->get('test');
    })->throws(Exception::class, 'This resource only supports fetching by integer ID.');
});

describe('Get all Evolution Chains', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->evolutionChain()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
