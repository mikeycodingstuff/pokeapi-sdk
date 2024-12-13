<?php

declare(strict_types=1);

namespace PokeApiSdk;

use PokeApiSdk\Resources\AbilityResource;
use PokeApiSdk\Resources\GenerationResource;
use PokeApiSdk\Resources\PokedexResource;
use PokeApiSdk\Resources\PokemonResource;
use PokeApiSdk\Resources\TypeResource;
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

    public function ability(): AbilityResource
    {
        return new AbilityResource($this);
    }

    public function generation(): GenerationResource
    {
        return new GenerationResource($this);
    }

    public function pokedex(): PokedexResource
    {
        return new PokedexResource($this);
    }

    public function pokemon(): PokemonResource
    {
        return new PokemonResource($this);
    }

    public function type(): TypeResource
    {
        return new TypeResource($this);
    }
}
