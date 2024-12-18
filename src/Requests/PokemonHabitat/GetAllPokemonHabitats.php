<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonHabitat;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemonHabitats extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON_HABITAT;
    }
}
