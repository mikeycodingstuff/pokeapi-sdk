<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait PokemonColorEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEMON_COLOR;
    }
}
