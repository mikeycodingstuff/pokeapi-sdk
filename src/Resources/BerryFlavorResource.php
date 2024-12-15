<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\BerryFlavor\GetAllBerryFlavors;
use PokeApiSdk\Requests\BerryFlavor\GetSingleBerryFlavor;

class BerryFlavorResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllBerryFlavors::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleBerryFlavor::class;
    }
}
