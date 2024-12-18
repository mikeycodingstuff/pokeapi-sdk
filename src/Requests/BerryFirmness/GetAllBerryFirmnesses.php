<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFirmness;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllBerryFirmnesses extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::BERRY_FIRMNESS;
    }
}
