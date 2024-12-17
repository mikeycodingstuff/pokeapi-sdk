<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\PokemonShape\GetAllPokemonShapes;
use PokeApiSdk\Requests\PokemonShape\GetSinglePokemonShape;

class PokemonShapeResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPokemonShapes::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePokemonShape::class;
    }
}
