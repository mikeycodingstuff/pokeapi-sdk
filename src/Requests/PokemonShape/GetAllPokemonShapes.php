<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonShape;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemonShapes extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON_SHAPE;
    }
}
