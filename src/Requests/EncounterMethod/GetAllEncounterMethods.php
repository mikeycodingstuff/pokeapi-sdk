<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterMethod;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEncounterMethods extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::ENCOUNTER_METHOD;
    }
}
