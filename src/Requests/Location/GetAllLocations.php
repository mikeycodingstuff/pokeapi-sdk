<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Location;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllLocations extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::LOCATION;
    }
}
