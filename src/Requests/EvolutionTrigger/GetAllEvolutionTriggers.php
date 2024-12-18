<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EvolutionTrigger;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEvolutionTriggers extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::EVOLUTION_TRIGGER;
    }
}
