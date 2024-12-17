<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\GrowthRate;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllGrowthRates extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'growth-rate';
    }
}
