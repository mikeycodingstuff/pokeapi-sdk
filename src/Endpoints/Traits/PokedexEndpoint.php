<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait PokedexEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEDEX;
    }
}
