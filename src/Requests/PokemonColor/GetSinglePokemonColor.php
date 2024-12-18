<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonColor;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemonColor extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON_COLOR;
    }
}
