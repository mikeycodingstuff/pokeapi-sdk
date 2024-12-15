<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterConditionValue;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEncounterConditionValues extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'encounter-condition-value';
    }
}
