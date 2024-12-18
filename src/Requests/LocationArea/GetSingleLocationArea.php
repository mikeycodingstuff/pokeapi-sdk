<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\LocationArea;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleLocationArea extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::LOCATION_AREA;
    }
}
