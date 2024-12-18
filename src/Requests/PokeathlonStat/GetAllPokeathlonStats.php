<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokeathlonStat;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokeathlonStats extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEATHLON_STAT;
    }
}
