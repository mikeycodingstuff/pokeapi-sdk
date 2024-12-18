<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PalParkArea;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePalParkArea extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::PAL_PARK_AREA;
    }
}
