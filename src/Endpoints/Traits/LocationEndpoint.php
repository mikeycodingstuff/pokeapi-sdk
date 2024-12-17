<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait LocationEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::LOCATION;
    }
}
