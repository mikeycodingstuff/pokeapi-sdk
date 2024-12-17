<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait NatureEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::NATURE;
    }
}
