<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Region\GetAllRegions;
use PokeApiSdk\Requests\Region\GetSingleRegion;

class RegionResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllRegions::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleRegion::class;
    }
}
