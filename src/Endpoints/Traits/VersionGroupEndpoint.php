<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait VersionGroupEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::VERSION_GROUP;
    }
}
