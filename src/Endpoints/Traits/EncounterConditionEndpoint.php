<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait EncounterConditionEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ENCOUNTER_CONDITION;
    }
}
