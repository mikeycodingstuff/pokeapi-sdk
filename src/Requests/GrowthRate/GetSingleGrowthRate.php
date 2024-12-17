<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\GrowthRate;

use PokeApiSdk\Endpoints\Traits\GrowthRateEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleGrowthRate extends GetSingleRequest
{
    use GrowthRateEndpoint;
}
