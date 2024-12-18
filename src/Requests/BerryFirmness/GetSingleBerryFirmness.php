<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFirmness;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleBerryFirmness extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::BERRY_FIRMNESS;
    }
}
