<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\BerryFirmness\GetAllBerryFirmnesses;
use PokeApiSdk\Requests\BerryFirmness\GetSingleBerryFirmness;

class BerryFirmnessResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllBerryFirmnesses::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleBerryFirmness::class;
    }
}
