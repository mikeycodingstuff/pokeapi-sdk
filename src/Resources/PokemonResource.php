<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Pokemon\GetAllPokemon;
use PokeApiSdk\Requests\Pokemon\GetSinglePokemon;

class PokemonResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPokemon::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePokemon::class;
    }
}
