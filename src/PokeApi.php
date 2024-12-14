<?php

declare(strict_types=1);

namespace PokeApiSdk;

use PokeApiSdk\Resources\AbilityResource;
use PokeApiSdk\Resources\BerryFirmnessResource;
use PokeApiSdk\Resources\BerryFlavorResource;
use PokeApiSdk\Resources\BerryResource;
use PokeApiSdk\Resources\GenerationResource;
use PokeApiSdk\Resources\PokedexResource;
use PokeApiSdk\Resources\PokemonResource;
use PokeApiSdk\Resources\SpeciesResource;
use PokeApiSdk\Resources\TypeResource;
use PokeApiSdk\Responses\PokeApiResponse;
use Saloon\Http\Connector;

class PokeApi extends Connector
{
    protected ?string $response = PokeApiResponse::class;

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

    public function berry(): BerryResource
    {
        return new BerryResource($this);
    }

    public function berryFirmness(): BerryFirmnessResource
    {
        return new BerryFirmnessResource($this);
    }

    public function berryFlavor(): BerryFlavorResource
    {
        return new BerryFlavorResource($this);
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

    public function species(): SpeciesResource
    {
        return new SpeciesResource($this);
    }

    public function type(): TypeResource
    {
        return new TypeResource($this);
    }
}
