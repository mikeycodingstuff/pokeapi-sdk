<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Location\GetAllLocations;
use PokeApiSdk\Requests\Location\GetSingleLocation;

class LocationResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllLocations::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleLocation::class;
    }
}
