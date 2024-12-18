<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonColor;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemonColors extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON_COLOR;
    }
}
