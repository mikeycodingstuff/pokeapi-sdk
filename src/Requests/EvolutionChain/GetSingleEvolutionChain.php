<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionChain;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleEvolutionChain extends GetByIdOnlySingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::EVOLUTION_CHAIN;
    }
}
