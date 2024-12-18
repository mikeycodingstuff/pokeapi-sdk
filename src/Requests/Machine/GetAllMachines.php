<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Machine;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMachines extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MACHINE;
    }
}
