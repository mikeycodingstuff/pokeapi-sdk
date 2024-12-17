<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait PalParkAreaEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::PAL_PARK_AREA;
    }
}
