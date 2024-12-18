<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Location;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleLocation extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::LOCATION;
    }
}
