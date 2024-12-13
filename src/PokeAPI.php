<?php

declare(strict_types=1);

namespace PokeApiSdk;

use PokeApiSdk\Resources\PokemonResource;
use Saloon\Http\Connector;

class PokeAPI extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://pokeapi.co/api/v2/';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    public function pokemon(): PokemonResource
    {
        return new PokemonResource($this);
    }
}
