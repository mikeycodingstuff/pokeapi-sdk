<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\GrowthRate;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleGrowthRate extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::GROWTH_RATE;
    }
}
