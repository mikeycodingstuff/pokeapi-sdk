<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFlavor;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleBerryFlavor extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::BERRY_FLAVOR;
    }
}
