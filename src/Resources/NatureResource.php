<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Nature\GetAllNatures;
use PokeApiSdk\Requests\Nature\GetSingleNature;

class NatureResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllNatures::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleNature::class;
    }
}
