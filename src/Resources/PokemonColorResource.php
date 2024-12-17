<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\PokemonColor\GetAllPokemonColors;
use PokeApiSdk\Requests\PokemonColor\GetSinglePokemonColor;

class PokemonColorResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPokemonColors::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePokemonColor::class;
    }
}
