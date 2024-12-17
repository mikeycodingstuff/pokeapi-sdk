<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait BerryFirmnessEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::BERRY_FIRMNESS;
    }
}
