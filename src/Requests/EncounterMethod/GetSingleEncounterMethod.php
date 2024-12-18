<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterMethod;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEncounterMethod extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ENCOUNTER_METHOD;
    }
}
