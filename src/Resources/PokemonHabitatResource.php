<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\PokemonHabitat\GetAllPokemonHabitats;
use PokeApiSdk\Requests\PokemonHabitat\GetSinglePokemonHabitat;

class PokemonHabitatResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPokemonHabitats::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePokemonHabitat::class;
    }
}
