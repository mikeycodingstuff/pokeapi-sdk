<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterCondition;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEncounterCondition extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'encounter-condition';
    }
}
