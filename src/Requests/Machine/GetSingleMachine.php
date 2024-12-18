<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Machine;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleMachine extends GetByIdOnlySingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MACHINE;
    }
}
