<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait MachineEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MACHINE;
    }
}
