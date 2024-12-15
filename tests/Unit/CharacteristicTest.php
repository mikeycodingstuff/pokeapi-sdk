<?php

declare(strict_types=1);

use PokeApiSdk\PokeApi;
use PokeApiSdk\Requests\Characteristic\GetAllCharacteristics;
use PokeApiSdk\Requests\Characteristic\GetSingleCharacteristic;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->singleFixtureId = 'characteristic/single-id';
    $this->singleFixtureName = 'characteristic/single-name';
    $this->allFixture = 'characteristic/all';

    $this->singleRequestClass = GetSingleCharacteristic::class;
    $this->allRequestClass = GetAllCharacteristics::class;

    $this->mockClient = new MockClient([
        $this->singleRequestClass => MockResponse::fixture($this->singleFixtureId),
        $this->allRequestClass => MockResponse::fixture($this->allFixture),
    ]);

    $this->connector = new PokeApi;
    $this->connector->withMockClient($this->mockClient);
});

describe('Get a single Characteristic', function () {
    it('sends a request with an id (int) and receives the expected response', function () {
        $response = $this->connector->characteristic()->get(1);

        $this->mockClient->assertSent($this->singleRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->singleFixtureId);
    });

    it('throws an exception when receiving a non int param', function () {
        $this->connector->characteristic()->get('test');
    })->throws(Exception::class, 'This resource only supports fetching by integer ID.');
});

describe('Get all Characteristics', function () {
    it('sends a request and receives the expected response', function () {
        $response = $this->connector->characteristic()->all();

        $this->mockClient->assertSent($this->allRequestClass);
        $this->mockClient->assertSentCount(1);

        successfulResponseExpectation($response, $this->allFixture);
    });
});
