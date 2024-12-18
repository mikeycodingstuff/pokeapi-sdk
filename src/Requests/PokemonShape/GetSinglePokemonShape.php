<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonShape;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemonShape extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON_SHAPE;
    }
}
