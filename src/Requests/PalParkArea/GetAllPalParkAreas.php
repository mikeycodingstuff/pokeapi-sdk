<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PalParkArea;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPalParkAreas extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::PAL_PARK_AREA;
    }
}
