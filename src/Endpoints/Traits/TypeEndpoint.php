<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait TypeEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::TYPE;
    }
}
