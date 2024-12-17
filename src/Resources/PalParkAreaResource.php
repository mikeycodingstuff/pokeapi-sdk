<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\PalParkArea\GetAllPalParkAreas;
use PokeApiSdk\Requests\PalParkArea\GetSinglePalParkArea;

class PalParkAreaResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllPalParkAreas::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSinglePalParkArea::class;
    }
}
