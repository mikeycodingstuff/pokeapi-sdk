<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait EggGroupEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::EGG_GROUP;
    }
}
