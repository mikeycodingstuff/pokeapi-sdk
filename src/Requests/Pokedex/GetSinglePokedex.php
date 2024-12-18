<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokedex;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokedex extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEDEX;
    }
}
