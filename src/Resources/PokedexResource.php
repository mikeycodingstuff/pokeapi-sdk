<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Pokedex\GetAllPokedexes;
use PokeApiSdk\Requests\Pokedex\GetSinglePokedex;

class PokedexResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPokedexes::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePokedex::class;
    }
}
