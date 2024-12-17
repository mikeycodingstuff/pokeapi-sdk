<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\GrowthRate\GetAllGrowthRates;
use PokeApiSdk\Requests\GrowthRate\GetSingleGrowthRate;

class GrowthRateResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllGrowthRates::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleGrowthRate::class;
    }
}
