<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionTrigger;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEvolutionTrigger extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::EVOLUTION_TRIGGER;
    }
}
