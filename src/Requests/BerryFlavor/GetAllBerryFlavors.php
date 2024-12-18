<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFlavor;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllBerryFlavors extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::BERRY_FLAVOR;
    }
}
