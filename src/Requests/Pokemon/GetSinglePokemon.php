<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokemon;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemon extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON;
    }
}
