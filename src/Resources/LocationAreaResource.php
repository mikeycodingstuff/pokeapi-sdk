<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\LocationArea\GetAllLocationAreas;
use PokeApiSdk\Requests\LocationArea\GetSingleLocationArea;

class LocationAreaResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllLocationAreas::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleLocationArea::class;
    }
}
