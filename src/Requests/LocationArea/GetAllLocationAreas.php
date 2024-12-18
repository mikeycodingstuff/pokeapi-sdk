<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\LocationArea;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllLocationAreas extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::LOCATION_AREA;
    }
}
