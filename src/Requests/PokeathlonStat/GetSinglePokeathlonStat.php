<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokeathlonStat;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokeathlonStat extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::POKEATHLON_STAT;
    }
}
