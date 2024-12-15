<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterMethod;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEncounterMethod extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'encounter-method';
    }
}
