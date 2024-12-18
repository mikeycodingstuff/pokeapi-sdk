<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterConditionValue;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEncounterConditionValue extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ENCOUNTER_CONDITION_VALUE;
    }
}
