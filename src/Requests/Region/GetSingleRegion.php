<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Region;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleRegion extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::REGION;
    }
}
