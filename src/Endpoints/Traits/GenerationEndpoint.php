<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait GenerationEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::GENERATION;
    }
}
