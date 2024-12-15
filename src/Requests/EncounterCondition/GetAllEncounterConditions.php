<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterCondition;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEncounterConditions extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'encounter-condition';
    }
}
