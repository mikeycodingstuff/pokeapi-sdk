<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Berry\GetAllBerries;
use PokeApiSdk\Requests\Berry\GetSingleBerry;

class BerryResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllBerries::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleBerry::class;
    }
}
